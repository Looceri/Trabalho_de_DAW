<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
            return response()->json([
                'success' => true,
                'message' => 'Login bem-sucedido',
                'user' => $user, // Retorna os dados do usuário
            ]);
        }

        // Se não conseguiu autenticar, retorna erro
        return response()->json([
            'success' => false,
            'message' => 'Credenciais inválidas',
        ], 401);
    }
}
