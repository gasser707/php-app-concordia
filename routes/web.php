<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\VaccinationFacilityController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');


Route::get('/person', [PersonController::class, 'index']);


Route::get('/facility', [VaccinationFacilityController::class, 'index']);
Route::get('/facility/create', [VaccinationFacilityController::class, 'showCreateForm'])->name('facility.showCreateForm');
Route::post('/facility/create', [VaccinationFacilityController::class, 'create'])->name('facility.create');
Route::get('/facility/edit/{id}', [VaccinationFacilityController::class, 'showEditForm'])->name('facility.showEditForm');
Route::post('/facility/edit/{id}', [VaccinationFacilityController::class, 'edit'])->name('facility.edit');
Route::delete('/facility/delete/{id}',[VaccinationFacilityController::class, 'destroy'])->name('facility.delete');
Route::get('/facility/{id}', [VaccinationFacilityController::class, 'show']);