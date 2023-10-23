<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ManageContentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WriterController;
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
    $categories = Categories::all();
    return view('landing', compact('categories'));
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

Route::middleware(['web', 'auth'])->group(function () {
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'admin'])->name('admin.dashboard');

        Route::put('/profile/{id}', [ProfileController::class, 'updateAdmin'])->name('profile.update');

        Route::prefix('cms')->group(function (){
            Route::prefix('writer')->group(function () {
                Route::get('/writer', [WriterController::class, 'index'])->name('writer');
            });

            Route::prefix('categories')->group(function () {
                Route::get('/categories', [CategoriesController::class, 'indexAdmin'])->name('categories.admin');
                Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
                Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
                Route::delete('/categories/delete/{id}', [CategoriesController::class, 'destroy'])->name('categories.delete');
            });

            Route::prefix('articles')->group(function () {
                Route::get('/article', [ArticleController::class, 'indexAdmin'])->name('article.admin');
            });

            Route::prefix('Manage-Content')->group(function () {
                Route::get('/latest-news', [ManageContentController::class, 'LatestNews'])->name('latest-news');
                Route::post('/latest-news/{id}', [ManageContentController::class, 'storeLatestNews'])->name('latest-news.add');

                Route::get('/recommend-news', [ManageContentController::class, 'RecommendNews'])->name('recommend-news');
                Route::post('/recommend-news/{id}', [ManageContentController::class, 'storeRecommendNews'])->name('recommend-news.add');
            });

        });
    });

    Route::middleware(['auth', 'role:user'])->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('user.dashboard');

        Route::put('/profile/{id}', [ProfileController::class, 'updateUser'])->name('profile.update');

        Route::prefix('category')->group(function () {
            Route::get('/categories', [CategoriesController::class, 'indexUser'])->name('categories');
        });

        Route::prefix('article')->group(function () {
            Route::get('/article', [ArticleController::class, 'index'])->name('article');
            Route::post('/article', [ArticleController::class, 'store'])->name('article.store');
            Route::put('/article/{id}', [ArticleController::class, 'update'])->name('article.update');
            Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');
        });

    });
});

