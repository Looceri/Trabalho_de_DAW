<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use Illuminate\Validation\Rule;
use Carbon\Carbon;


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
    public function openVacancie()
    {
        return view('pages.add-vacancies');
    }

    public function showVacanciesByOwner($ownerId)
{
    // Buscar todas as vagas de um proprietário específico, com as categorias associadas
    $vagas = Vacancy::with('categories') // Eager loading para categorias associadas
                    ->where('owner_id', $ownerId) // Filtra pelo ID do proprietário
                    ->get(); // Recupera todas as vagas desse proprietário

    // Retornar as vagas como resposta JSON
    return response()->json($vagas);
}

public function countVacanciesByOwner($ownerId)
{
    // Contar o número de vagas associadas ao proprietário com submission_end_date menor que a data atual
    $vacanciesCount = Vacancy::where('owner_id', $ownerId) // Filtra as vagas pelo ID do proprietário
                             ->where('submission_end_date', '<', now()) // Verifica se a submission_end_date é anterior à data atual
                             ->count(); // Conta o número de vagas

    // Retornar a contagem como resposta JSON
    return response()->json(['vacancies_count' => $vacanciesCount]);
}





    //categoriasController
    public function openCategory()
    {
        return view('pages.add-category');
    }
    public function showCategories()
    {
        $categories = VacancyCategory::all();
        return view('pages.categories', compact('categories'));
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

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', Rule::unique('vacancy_categories')->ignore($id),],
            'description' => 'nullable|string',
        ]);

        // Buscar a categoria pelo ID
        $category = VacancyCategory::findOrFail($id);

        // Atualizar os dados
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('list-category')->with('success', 'Categoria atualizada com sucesso!');
    }


    public function deleteCategory($id)
    {
        $category = VacancyCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('list-category')->with('success', 'Categoria Apagada com sucesso!');
    }

    public function editCategory($id)
    {
        $category = VacancyCategory::findOrFail($id);
        return view('pages.add-category', compact('category'));
    }



    public function getCountVanciesData($ownerId)
    {
        try {
            $today = Carbon::today();
            $expiredCount = Vacancy::where('owner_id', $ownerId)
                ->where('submission_end_date', '<', $today)
                ->count();

            return response()->json(['count' => $expiredCount], 200);
        } catch (\Exception $e) {
            // Log the error for further debugging
            return response()->json(['error' => 'Erro ao contar vagas expiradas'], 500);
        }
    }
}
