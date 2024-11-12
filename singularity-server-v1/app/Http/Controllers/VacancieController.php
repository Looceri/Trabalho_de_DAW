<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\Benefit;
use App\Models\Requirement;
use App\Models\File;
use App\Models\Application;



class VacancieController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::with('owner')->get();
        return  $vacancies;
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

    //rotas web vagas
    public function showVacancie()
    {
        // $vacancies = Vacancy::with('owner')->get();
        $vacancies = Vacancy::where('status', '=', true)->with('owner')->get();

        return view('pages.vacancies', compact('vacancies'));
    }

    public function Vacancydetails($id)
    {
        $vacancy = Vacancy::with('owner', 'categories','requirements','benefits','applications')->findOrFail($id);
      

        return view('pages.vacancyDetails', compact('vacancy'));

    }

    public function update_vacancy($id)
    {
        $vacancy = Vacancy::with('owner', 'categories','requirements','benefits')->findOrFail($id);

        $categories = VacancyCategory::where('status', '=', true)->get();
        return view('pages.add-vacancies',compact('categories','vacancy'));
    }

    public function openVacancie()
    {
         $categories = VacancyCategory::where('status', '=', true)->get();
         return view('pages.add-vacancies',compact('categories'));
    }

    public function desactive_vacancy($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->update(['status' => false]);
        return redirect()->route('list-vacancy')->with('success', 'Vaga Apagada com sucesso!');
    }
    public function desactive_application($id)
    {
        $application = Application::findOrFail($id);
    
        // Toggle the 'approved' status and log it
        $newStatus = !$application->approved;
    
        $application->update(['approved' => $newStatus]);
    
        return redirect()->route('details-vacancy', ['id' => $id, 'showEmail' => 'true'])
                         ->with('success', 'Sucesso!');
    }
    

     
    public function store(Request $request)
    
    {
            // Validação dos dados recebidos
            $request->validate([
                'title' => 'required|string|max:255',
                'salary' => 'nullable|numeric',
                'submission_start_date' => 'required|date',
                'submission_end_date' => 'required|date',
                'vacancies_count' => 'required|integer',
                'description' => 'required|string',
                'categories' => 'required|array', // As categorias devem ser um array
                'categories.*' => 'exists:vacancy_categories,id', // Cada categoria selecionada deve existir na tabela de categorias
                'benefits' => 'nullable|array', // Benefícios são opcionais
                'benefits.*' => 'string|max:255', // Cada benefício é uma string
                'requirements' => 'nullable|array', // Requisitos são opcionais
                'requirements.*' => 'string|max:255', // Cada requisito é uma string
            ]);




            // Criar a vaga (vacancy)
            $vacancy = Vacancy::create([
                'owner_id' => auth()->id(), // Definindo o owner (usuário logado)
                'title' => $request->title,
                'salary' => $request->salary,
                'submission_start_date' => $request->submission_start_date,
                'submission_end_date' => $request->submission_end_date,
                'vacancies_count' => $request->vacancies_count,
                'description' => $request->description,
            ]);

            // Associar as categorias à vaga (many-to-many)
            $vacancy->categories()->attach($request->categories);

            // Adicionar os benefícios à vaga (se fornecidos)
            if ($request->has('benefits')) {
                foreach ($request->benefits as $benefit) {
                    Benefit::create([
                        'vacancy_id' => $vacancy->id,
                        'benefit' => $benefit,
                    ]);
                }
            }

            // Adicionar os requisitos à vaga (se fornecidos)
            if ($request->has('requirements')) {
                foreach ($request->requirements as $requirement) {
                    Requirement::create([
                        'vacancy_id' => $vacancy->id,
                        'requirement' => $requirement,
                    ]);
                }
            }

            // Retornar uma resposta ou redirecionamento
            return redirect()->route('add-vacancy')->with('success', 'Vaga cadastrada com sucesso!');
    }


    public function edit_vacancy(Request $request, $id)
    {
            // Validação dos dados recebidos
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'salary' => 'nullable|numeric',
                'submission_start_date' => 'required|date',
                'submission_end_date' => 'required|date',
                'vacancies_count' => 'required|integer',
                'description' => 'required|string',
                'categories' => 'required|array', // As categorias devem ser um array
                'categories.*' => 'exists:vacancy_categories,id', // Cada categoria selecionada deve existir na tabela de categorias
                'benefits' => 'nullable|array', // Benefícios são opcionais
                'benefits.*' => 'string|max:255', // Cada benefício é uma string
                'requirements' => 'nullable|array', // Requisitos são opcionais
                'requirements.*' => 'string|max:255', // Cada requisito é uma string
            ]);

            // Encontre a vaga existente
            $vacancy = Vacancy::findOrFail($id);

            // Atualize os dados principais da vaga
            $vacancy->title = $validatedData['title'];
            $vacancy->submission_start_date = $validatedData['submission_start_date'];
            $vacancy->submission_end_date = $validatedData['submission_end_date'];
            $vacancy->vacancies_count = $validatedData['vacancies_count'];
            $vacancy->salary = $validatedData['salary'] ?? null;
            $vacancy->description = $validatedData['description'];

            // Salve as alterações principais da vaga
            $vacancy->save();

            // Atualize as categorias selecionadas
            $vacancy->categories()->sync($validatedData['categories']);

            // Atualize os requisitos
            if (isset($validatedData['requirements'])) {
                $vacancy->requirements()->delete();  // Apagar os antigos requisitos
                foreach ($validatedData['requirements'] as $requirement) {
                    $vacancy->requirements()->create(['requirement' => $requirement]);
                }
            }

            // Atualize os benefícios
            if (isset($validatedData['benefits'])) {
                $vacancy->benefits()->delete();  // Apagar os antigos benefícios
                foreach ($validatedData['benefits'] as $benefit) {
                    $vacancy->benefits()->create(['benefit' => $benefit]);
                }
            }

            // Redirecionar de volta com sucesso
            return redirect()->route('list-vacancy')->with('success', 'Vaga atualizada com sucesso!');
    }

    // candidaturas
    public function show_applications($id)
    {
        $applications = Application::with('vacancy', 'user')->where('vacancy_id', $id)->get();
        return view('pages.applications', compact('applications'));
    }

    public function show_file($id){
        $file=File::findOrFail($id);
        return view('pages.open-file',compact('file'));
    }





        //categoriasController
     public function openCategory()
     {
        return view('pages.add-category');
     }


     public function showCategories()

     {
        $categories = VacancyCategory::where('status', '=', true)->get();
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

    public function updateCategory(Request $request,$id)
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
        $category->update(['status' => false]);
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
