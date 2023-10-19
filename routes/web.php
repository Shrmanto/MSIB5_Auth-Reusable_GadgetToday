<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Models\Categories;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::prefix('auth')->group(function (){
    Route::prefix('login')->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
    });

    Route::prefix('register')->group(function () {
        Route::get('/register', [AuthController::class,'register'])->name('register');
        Route::post('/register', [AuthController::class,'registerAction'])->name('register.action');
    });

    Route::get('/logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'admin'])->name('admin.dashboard');

    Route::prefix('cms')->group(function (){
        Route::prefix('category')->group(function () {
            Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
        });

        Route::prefix('article')->group(function () {
            Route::get('/article', [ArticleController::class, 'index'])->name('article');
            Route::post('/article', [ArticleController::class, 'store'])->name('article.store');
            Route::put('/article/{id}', [ArticleController::class, 'update'])->name('article.update');
            Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');
        });

    });

});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
});
