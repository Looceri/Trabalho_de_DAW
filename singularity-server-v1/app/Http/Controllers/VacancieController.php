<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vacancie;

class VacancieController extends Controller
{
    public function index()
    {
        $vacancies = Vacancie::all();
        return $vacancies;
    }
}
