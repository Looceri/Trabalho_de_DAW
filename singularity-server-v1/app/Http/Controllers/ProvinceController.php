<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    // app/Http/Controllers/ProvinceController.php
    public function index()
    {
        $provinces = Province::all();
        return response()->json($provinces);
    }
}
