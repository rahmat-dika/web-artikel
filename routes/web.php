<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;





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

Route::get('/', [PostController::class, 'index']);

Route::get('/category', [DashboardCategoryController::class, 'index']);
Route::get('/category/create', [DashboardCategoryController::class, 'create']);
Route::post('create-category', [DashboardCategoryController::class, 'store']);
Route::get('show-category/{id}', [DashboardCategoryController::class, 'show']);
Route::get('edit-category/{id}', [DashboardCategoryController::class, 'edit']);
Route::post('update-category', [DashboardCategoryController::class, 'update']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('action-login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::resource('/dashboard', DashboardPostController::class)->middleware('auth');