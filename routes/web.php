<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('home');
});


// any routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');
Route::get('/blog/{title}', [PostController::class, 'show'])->name('blog');



// only guest can accces this routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login-page');
    Route::post('/login/log', [LoginController::class, 'authenticate'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
    Route::post('/register/regist', [RegisterController::class, 'adduser'])->name('register');
});


// only user can acces this routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-page');
    Route::get('/dashboard/postsies', [DashboardController::class, 'maintenance'])->name('dashboard-posts');
    Route::get('/dashboard/products', [ProductController::class, 'dashboardAll'])->name('dashboard-product');
    Route::get('/dashboard/products/create', [ProductController::class, 'dashboardCreatePage'])->name('dashboard-create-product');
    Route::post('/dashboard/products/create/create', [ProductController::class, 'dasboardCreateAction'])->name('dashboard-create-product-create');
    Route::get('/dashboard/products/{id}/update', [ProductController::class, 'dashboardUpdatePage'])->name('dsahboard-update-product');
    Route::post('/dashboard/products/update/update', [ProductController::class, 'dashboardUpdateAction'])->name('dashboard-upate-product-update');
    Route::get('/dashboard/products/{id}/delete', [ProductController::class,  'dashboardDeleteAction'])->name('dashboard-delete-product-delete');

    Route::resource('/dashboard/posts', PostController::class);

    Route::get('/dashboard/users', [DashboardController::class, 'showAllUsers']);
    Route::get('/dashboard/testimoni', [DashboardController::class, 'showAllTestimony']);
    Route::get('/dashboard/testimoni/create', [DashboardController::class, 'createTestimonyPage']);
    Route::post('/dashboard/testimoni/create', [DashboardController::class, 'createTestimonyAction'])->name('dashboard-testimony-action');
    Route::get('/dashboard/testimoni/{id}/delete', [DashboardController::class, 'deleteTestimonyAction'])->name('dashboard-testimony-delete');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
