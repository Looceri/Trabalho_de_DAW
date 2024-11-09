<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\VacancyCategory;

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

    public function storeCategorie(Request $request)
    {
        // Validação dos dados da request
        $request->validate([
            'name' => 'required|unique:vacancy_categories,name', 
            'description' => 'nullable|string'
        ]);
   
        // Criação da categoria se a validação for bem-sucedida
        $category = VacancyCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        return redirect()->route('add-category')->with('success', 'Categoria criada com sucesso!');

    }
    
    public function openCategory(){
       return view('pages.add-category');
    }
    public function openVacancie(){
       return view('pages.add-vacancies');
    }
}
