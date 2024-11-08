<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancieController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::with('owner')->get();
        return $vacancies;
    }


    public function findById($id)
    {
        $vacancy = Vacancy::with('owner', 'requirements')->find($id);

        if (!$vacancy) {
            return response()->json(['error' => 'Vaga não encontrada'], 404);
        }

        return response()->json($vacancy);
    }

    public function show($id)
    {
        // Carregar a vaga com as categorias associadas
        $vaga = Vacancy::with('owner', 'categories')->findOrFail($id);


        return response()->json($vaga);
    }
}
