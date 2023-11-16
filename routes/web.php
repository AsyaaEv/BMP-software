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
    return view('welcome');
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
    Route::get('/dashboard/products', [ProductController::class, 'dashboardAll'])->name('dashboard-product');
    Route::get('/dahboard/products/create', [ProductController::class, 'dashboardCreatePage'])->name('dashboard-create-product');
    Route::post('/dahboard/products/create/create', [ProductController::class, 'dasboardCreateAction'])->name('dashboard-create-product-create');
    Route::get('/dashboard/products/{id}/update', [ProductController::class, 'dashboardUpdatePage'])->name('dsahboard-update-product');
    Route::post('/dashboard/product/update/update', [ProductController::class, 'dashboardUpdateAction'])->name('dashboard-upate-project-update');
    Route::get('/dashboard/product/{id}/delete', [ProductController::class,  'dashboardDeleteAction'])->name('dashboard-delete-product-delete');
    Route::get('/dashboard/products/testimony', [DashboardController::class, 'showTestimony'])->name('dashboard-testimonies');
    Route::get('/dashboard/products/testimony/add', [DashboardController::class, 'addTestimonyPage'])->name('dashboard-create-testimony-page');
    Route::post('/dashboard/products/testimony/add', [DashboardController::class, 'addTestimonyAction'])->name('dashboard-create-testimony');



    Route::resource('/dashboard/posts', PostController::class);
});
