<?php

use App\Http\Controllers\VoorraadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;

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
})->name('home');

// Voorraad
// Voorraad producten overzicht
Route::get('/voorraad/overzicht', [VoorraadController::class, 'overzicht_producten'])->name('voorraad.overzicht_producten');

// Voorraad product toevoegen
Route::get('/voorraad/toevoegen', [VoorraadController::class, 'toevoegen'])->name('voorraad.toevoegen');
// toevoegen form submit page
Route::post('/voorraad/store', [VoorraadController::class, 'store'])->name('voorraad.store');

// Edit product form page
Route::get('/voorraad/wijzigen/{productId}', [VoorraadController::class, 'wijzigen'])->name('voorraad.wijzigen');
// Edit form submit page
Route::put('/voorraad/update/{productId}', [VoorraadController::class, 'update'])->name('voorraad.update');

// Delete reservation
Route::delete('/voorraad/delete/{productId}', [VoorraadController::class, 'delete'])->name('voorraad.delete');

// Leverancier create
Route::get('/leverancier/create', [LeverancierController::class, 'create']);
Route::post('/leverancier', [LeverancierController::class, 'store']);
Route::get('/leverancier/show', [LeverancierController::class, 'show']);
// Leverancier update
Route::get('/leverancier/edit/{id}', [LeverancierController::class, 'edit']);
Route::put('/leverancier/{id}', [LeverancierController::class, 'update']);
// Leverancier delete
Route::delete('/leverancier/{id}', [LeverancierController::class, 'destroy']);
