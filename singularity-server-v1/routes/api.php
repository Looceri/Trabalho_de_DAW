<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancieController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\UserLocationController;




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
Route::get('/user', [UserController::class, 'indexLoc']);
Route::get('/user/{id}', [UserController::class, 'findByIdd']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/upload', [FileController::class, 'store']);


Route::get('/vagas', [VacancieController::class, 'index']);
Route::get('/vagas/{id}', [VacancieController::class, 'findById']);

Route::get('/benefits/{id}', [BenefitController::class, 'findById']);
Route::get('/benefits_category/{id}', [vacancieController::class, 'show']);
Route::get('/vacancies/{id}', [VacancieController::class, 'show']);

Route::post('/candidate', [FileController::class, 'apply']);

Route::get('/user/{id}/locations', [UserLocationController::class, 'getUserLocation']);
