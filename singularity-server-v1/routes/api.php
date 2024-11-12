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
use App\Http\controllers\PostController;
use App\Http\Controllers\PostReactionController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------|
| API Routes                                                              |
|--------------------------------------------------------------------------|
| Here is where you can register API routes for your application. These    |
| routes are loaded by the RouteServiceProvider and all of them will       |
| be assigned to the "api" middleware group. Make something great!         |
*/

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'findById']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/upload', [FileController::class, 'store']);
Route::post('/user/update', [UserController::class, 'updateUser'])->name('user_update');
Route::get('/last-cv/{user_id}/{vacancy_id}', [FileController::class, 'getLastCv']);
Route::get('/vagas', [VacancieController::class, 'index']);
Route::get('/vagas/{id}', [VacancieController::class, 'findById']);
Route::get('/benefits/{id}', [BenefitController::class, 'findById']);
Route::get('/benefits_category/{id}', [vacancieController::class, 'show']);
Route::get('/vacancies/{id}', [VacancieController::class, 'show']);
Route::get('/benefits_category_all/{id}', [vacancieController::class, 'showVacanciesByOwner']);
Route::get('/count/{id}', [vacancieController::class, 'countVacanciesByOwner']);
Route::post('/candidate', [FileController::class, 'apply']);
Route::get('/user/{id}/locations', [UserLocationController::class, 'getUserLocation']);
Route::get('/provinces', [ProvinceController::class, 'index']);
Route::get('/province/{name}', [ProvinceController::class, 'getProvinceData']);
Route::get('/getAllOwner', [UserController::class, 'index']);
Route::get('/CountVacancies/{id}', [VacancieController::class, 'getCountVanciesData']);
Route::get('/user/{userId}/location', [UserLocationController::class, 'getUserLocationn']);
Route::get('posts/{companyId}', [PostController::class, 'getPostsByCompany']);



Route::get('/posts', [PostController::class, 'all']);

Route::get('/posts/{companyId}', [PostController::class, 'index']);

Route::get('/posts/{companyId}/reactions', [PostController::class, 'getAllReactions']);

