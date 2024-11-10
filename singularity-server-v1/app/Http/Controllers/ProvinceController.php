<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Vacancy;
use App\Models\Location;
use App\Models\User;

class ProvinceController extends Controller
{
    // app/Http/Controllers/ProvinceController.php
    public function getProvinceData($name)
    {
        // Busca a província pelo nome
        $province = Province::where('name', $name)->first();

        if (!$province) {
            return response()->json(['error' => 'Província não encontrada'], 404);
        }

        // Busca os distritos da província
        $districts = District::where('province_id', $province->id)->get();

        // Recupera os IDs dos distritos
        $districtIds = $districts->pluck('id');

        // Recupera as localizações associadas aos distritos
        $locations = Location::whereIn('district_id', $districtIds)->get();

        // Recupera os IDs das localizações
        $locationIds = $locations->pluck('id');

        // Agora, busque os usuários (owners) associados a essas localizações
        $users = User::whereHas('locations', function ($query) use ($locationIds) {
            $query->whereIn('location_id', $locationIds);
        })->get();

        // Agora, busque as vagas associadas a esses usuários (owners)
        $vacancies = Vacancy::whereIn('owner_id', $users->pluck('id'))->get();

        // Calculando o total de vagas
        $totalVacancies = $vacancies->sum('vacancies_count');

        // Calculando a média salarial das vagas
        $salaryAverage = $vacancies->avg('salary');

        // Encontrando o setor mais demandado
        $topSector = $vacancies->groupBy('title')->sortByDesc(fn($vacancies) => $vacancies->count())->keys()->first();

        return response()->json([
            'province' => [
                'name' => $province->name,
                'totalVacancies' => $totalVacancies,
                'salaryAverage' => $salaryAverage,
                'topSector' => $topSector,
            ]
        ]);
    }
}
