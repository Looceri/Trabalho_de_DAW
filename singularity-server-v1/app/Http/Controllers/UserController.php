<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $user = User::with('location_id')->get();
        return $user;
    }

    public function register(Request $request)
    {
        dd($request);
    }

    public function findById($id)
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
}
