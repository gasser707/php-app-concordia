<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\VaccinationFacilityController;



Route::get('/', function () {
    return view('home');
})->name('home');





Route::get('/facility', [VaccinationFacilityController::class, 'index']);
Route::get('/facility/create', [VaccinationFacilityController::class, 'showCreateForm'])->name('facility.showCreateForm');
Route::post('/facility/create', [VaccinationFacilityController::class, 'create'])->name('facility.create');
Route::get('/facility/edit/{id}', [VaccinationFacilityController::class, 'showEditForm'])->name('facility.showEditForm');
Route::post('/facility/edit/{id}', [VaccinationFacilityController::class, 'edit'])->name('facility.edit');
Route::delete('/facility/delete/{id}',[VaccinationFacilityController::class, 'destroy'])->name('facility.delete');

Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/create', [PersonController::class, 'showCreateForm'])->name('person.showCreateForm');
Route::post('/person/create', [PersonController::class, 'create'])->name('person.create');
Route::get('/person/edit/{id}', [PersonController::class, 'showEditForm'])->name('person.showEditForm');
Route::post('/person/edit/{id}', [PersonController::class, 'edit'])->name('person.edit');
Route::delete('/person/delete/{id}',[PersonController::class, 'destroy'])->name('person.delete');
Route::get('/person/{id}', [PersonController::class, 'show']);



