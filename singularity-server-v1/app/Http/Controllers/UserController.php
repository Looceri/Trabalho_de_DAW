<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\UserLocation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    public function findById($id)
    {
        // Tenta encontrar o usuário com o ID fornecido
        $user = User::find($id);

        // Verifica se o usuário foi encontrado
        if ($user) {
            // Retorna os dados do usuário como uma resposta JSON
            return response()->json($user);
        }

        // Caso o usuário não seja encontrado, retorna um erro
        return response()->json(['error' => 'Usuário não encontrado'], 404);
    }
    public function showUsers(){
         $users=User::all();
         return view('pages.users',compact('users'));
    }


    public function register(Request $request)
    {
        // Validação dos dados de entrada
        $validatedData = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:8',
            'status' => 'nullable|integer',
        ]);

        try {
            // Criação do usuário
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            // Define o status do usuário
            $user->status = 0;
            $user->save();

            // Autentica o usuário automaticamente
            Auth::login($user);

            // Retorno de sucesso
            return response()->json([
                'success' => true,
                'message' => 'Usuário registrado e logado com sucesso',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json([
                'success' => false,
                'message' => 'Erro ao registrar o usuário',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function indexLoc()
    {
        $user = User::with('location_id')->get();
        return $user;
    }

    public function findByIdd($id)
    {
        $user = User::with('location_id')->find($id);

        if (!$user) {
            return response()->json(['error' => 'Vaga não encontrada'], 404);
        }

        return response()->json($user);
    }


    public function showUserLocations($userId)
    {
        $user = User::with('locations')->find($userId);

        if (!$user) {
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }

        return response()->json($user->locations);
    }
    public function login(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tenta autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Cria um token JWT para o usuário
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => 'Login bem-sucedido',
                'user' => $user, // Retorna os dados do usuário
                'token' => $token, // Retorna o token JWT
            ]);
        }

        // Se não conseguiu autenticar, retorna erro
        return response()->json([
            'success' => false,
            'message' => 'Credenciais inválidas',
        ], 401);
    }


    public function getUserEducation($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }

        return response()->json($user->educations);
    }

    public function createUserEducation(Request $request)
    {
        // Valida o os dados recebidos
        $request->validate([
            'user_id' => 'required|integer',
            'level' => 'required|string',
            'institution' => 'required|string',
            'course' => 'required|string',
            'start_year' => 'required|integer',
            'end_year' => 'required|integer',
        ]);

        try {
            // Cria um novo registro na tabela user_educations
            $education = \App\Models\UserEducation::create([
                'user_id' => $request->user_id,
                'level' => $request->level,
                'institution' => $request->institution,
                'course' => $request->course,
                'start_year' => $request->start_year,
                'end_year' => $request->end_year,
            ]);

            // Retorna o registro criado
            return response()->json($education, 201);
        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar o registro de educa o',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateUserEducation(Request $request, $id)
    {
        // Valida o os dados recebidos
        $request->validate([
            'user_id' => 'required|integer',
            'level' => 'required|string',
            'institution' => 'required|string',
            'course' => 'required|string',
            'start_year' => 'required|integer',
            'end_year' => 'required|integer',
        ]);

        try {
            // Tenta encontrar o registro na tabela user_educations
            $education = \App\Models\UserEducation::find($id);

            if (!$education) {
                return response()->json(['error' => 'Registro de educa o n o encontrado'], 404);
            }

            // Atualiza o registro
            $education->user_id = $request->user_id;
            $education->level = $request->level;
            $education->institution = $request->institution;
            $education->course = $request->course;
            $education->start_year = $request->start_year;
            $education->end_year = $request->end_year;
            $education->save();

            // Retorna o registro atualizado
            return response()->json($education);
        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar o registro de educa o',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function updateUser(Request $request)
    {
        // Valida os dados recebidos
        $request->validate([
            'id' => 'required|integer',
            'name' => 'nullable|string|max:191',
            'email' => 'nullable|string|email|max:191|unique:users,email,' . $request->id,
            'email_verified_at' => 'nullable|date',
            'password' => 'nullable|string|min:8',
            'role' => 'nullable|string|max:50',
            'status' => 'nullable|integer',
            'description' => 'nullable|string|max:1000',
            'remember_token' => 'nullable|string|max:100',
            'birth_date' => 'nullable|date',
            'adress' => 'nullable|string|max:191',
            'province' => 'nullable|string|max:191',
            'sexo' => 'nullable|string|max:191',
        ], [
            'email.unique' => 'Já existe um usu rio com este e-mail',
            'email_verified_at.date' => 'O campo data de e-mail verificado deve ser uma data válida',
            'password.min' => 'O campo senha deve ter pelo menos :min caracteres',
            'role.max' => 'O campo role deve ter no máximo :max caracteres',
            'status.integer' => 'O campo status deve ser um número inteiro',
            'description.max' => 'O campo descri o deve ter no máximo :max caracteres',
            'remember_token.max' => 'O campo token de lembran a deve ter no máximo :max caracteres',
            'birth_date.date' => 'O campo data de nascimento deve ser uma data válida',
            'adress.max' => 'O campo endere o deve ter no máximo :max caracteres',
            'province.max' => 'O campo província deve ter no máximo :max caracteres',
            'sexo.max' => 'O campo sexo deve ter no máximo :max caracteres',
        ]);

        $request->updated_at = Carbon::now();

        try {
            // Tenta encontrar o usuário na tabela users
            $user = User::find(id: $request->id);

            if (!$user) {
                return response()->json(['error' => 'Usuário não encontrado'], 404);
            }

            // Atualiza o usuário
            foreach (['name', 'email', 'email_verified_at', 'password', 'role', 'status', 'description', 'remember_token', 'birth_date', 'adress', 'province', 'sexo'] as $field) {
                if ($request->has($field) && $request->filled($field) &&  $request->$field !== $user->$field ) {
                    $user->$field = $field === 'password' ? Hash::make($request->$field) : $request->$field;
                }
            }
            $user->save();

            // Retorna o usuário atualizado
            return response()->json([
                'success' => true,
                'message' => 'Usuário atualizado com sucesso',
                'data' => $user,
            ], 200);
        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar o usuário',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

}
