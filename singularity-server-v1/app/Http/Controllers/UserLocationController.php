<?php

namespace App\Http\Controllers;

use App\Models\UserLocation;
use Illuminate\Http\Request;
use App\Models\User;

class UserLocationController extends Controller
{
    public function getUserLocation($userId)
    {
        // Carregar os relacionamentos usando 'with'
        $location = UserLocation::with(['location', 'location.district', 'location.district.province'])
            ->where('user_id', $userId)
            ->first();

        if ($location) {
            return response()->json($location);
        }

        return response()->json(['error' => 'Localização não encontrada'], 404);
    }


    public function getUserLocationn($userId)
    {
        // Recupera o usuário com as informações de localização e distrito/província
        $user = User::with([
            'locations' => function ($query) {
                $query->with(['district' => function ($query) {
                    $query->with('province');
                }]);
            }
        ])->find($userId);

        if (!$user || !$user->locations) {
            return response()->json(['message' => 'Usuário ou localização não encontrado'], 404);
        }

        return response()->json($user->locations);
    }
}
