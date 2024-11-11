<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'show'])->name('users');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Categories
    Route::get('/add-category', [VacancieController::class, 'openCategory'])->name('add-category');
    Route::post('/add-category', [VacancieController::class,'storeCategorie'])->name('add-category');


    Route::get('/list-category', [VacancieController::class, 'showCategories'])->name('list-category');

    Route::get('/delete-category/{id}', [VacancieController::class, 'deleteCategory'])->name('delete-category');
    Route::get('/edit-category/{id}', [VacancieController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}', [VacancieController::class,'updateCategory'])->name('update-category');


    //Vacancie
    Route::get('/add-vacancie', [VacancieController::class, 'openVacancie'])->name('add-vacancie');

});

require __DIR__.'/auth.php';
