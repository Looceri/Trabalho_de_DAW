<?php

namespace App\Http\Controllers;

use App\Models\UserLocation;
use Illuminate\Http\Request;

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
}
