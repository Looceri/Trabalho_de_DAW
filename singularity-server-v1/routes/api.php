<?php

use App\Http\Controllers\API\V1\CandidateController as V1CandidateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\VacancieController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\UserLocationController;
use App\Http\Controllers\CandidateController;
use App\Http\controllers\ProvinceController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'findById']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/upload', [FileController::class, 'store']);

Route::get('/last-cv/{user_id}/{vacancy_id}', [FileController::class, 'getLastCv']);

Route::get('/vagas', [VacancieController::class, 'index']);
Route::get('/vagas/{id}', [VacancieController::class, 'findById']);

Route::get('/benefits/{id}', [BenefitController::class, 'findById']);
Route::get('/benefits_category/{id}', [vacancieController::class, 'show']);
Route::get('/vacancies/{id}', [VacancieController::class, 'show']);

Route::post('/candidate', [V1CandidateController::class, 'apply']);
Route::post('/candidate', [FileController::class, 'apply']);

Route::get('/user/{id}/locations', [UserLocationController::class, 'getUserLocation']);

Route::get('/provinces', [ProvinceController::class, 'index']);

Route::get('province/{name}', [ProvinceController::class, 'getProvinceData']);
