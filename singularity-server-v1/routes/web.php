<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancieController;
use App\Http\Controllers\PostController;

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





Route::middleware('auth','verified')->group(function () {
    Route::get('/', [UserController::class, 'showDash'])->name('dashboard');
    Route::get('/users', [UserController::class, 'show'])->name('users');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [UserController::class, 'showUsers'])->name('users');
    Route::post('/desactive-user/{id}', [UserController::class, 'desactive_user'])->name('desactive-user');



    //Categories
    Route::get('/add-category', [VacancieController::class, 'openCategory'])->name('add-category-page');
    Route::post('/add-category', [VacancieController::class,'storeCategorie'])->name('add-category');


    Route::get('/list-category', [VacancieController::class, 'showCategories'])->name('list-category');

    Route::get('/delete-category/{id}', [VacancieController::class, 'deleteCategory'])->name('delete-category');
    Route::get('/edit-category/{id}', [VacancieController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}', [VacancieController::class,'updateCategory'])->name('update-category');


    //Vacancie
    Route::get('/add-vacancy', [VacancieController::class, 'openVacancie'])->name('add-vacancy-page');
    Route::post('/add-vacancy', [VacancieController::class, 'store'])->name('add-vacancy');

    Route::get('/list-vacancy', [VacancieController::class, 'showVacancie'])->name('list-vacancy');
    Route::get('/details-vacancy/{id}', [VacancieController::class, 'Vacancydetails'])->name('details-vacancy');

    Route::get('/update-vacancy/{id}', [VacancieController::class, 'update_vacancy'])->name('update-vacancy');
    Route::put('/edit-vacancy/{id}', [VacancieController::class, 'edit_vacancy'])->name('edit-vacancy');
    Route::post('/desactive-vacancy/{id}', [VacancieController::class, 'desactive_vacancy'])->name('desactive-vacancy');
    Route::post('/desactive-application/{id}', [VacancieController::class, 'desactive_application'])->name('desactive-application');

   //candidaturas
   Route::get('/aplications/{id}', [VacancieController::class, 'show_applications'])->name('aplications');
   Route::get('/file/{id}', [VacancieController::class, 'show_file'])->name('file');


   //pots
   Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
   Route::get('/posts/create', [PostController::class, 'create'])->name('add-post');
   Route::post('/posts', [PostController::class, 'store'])->name('store-post');
   Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('edit-post');
   Route::post('/posts/{post}', [PostController::class, 'update'])->name('update-post');
   Route::post('/posts/{post}/deactivate', [PostController::class, 'deactivate'])->name('deactivate-post');


});

require __DIR__.'/auth.php';
