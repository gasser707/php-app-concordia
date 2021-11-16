<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/create', [PersonController::class, 'showCreateForm'])->name('person.showCreateForm');
Route::post('/person/create', [PersonController::class, 'create'])->name('person.create');
Route::get('/person/edit/{id}', [PersonController::class, 'showEditForm'])->name('person.showEditForm');
Route::post('/person/edit/{id}', [PersonController::class, 'edit'])->name('person.edit');
Route::delete('/person/delete/{id}',[PersonController::class, 'destroy'])->name('person.delete');
Route::get('/person/{id}', [PersonController::class, 'show']);


