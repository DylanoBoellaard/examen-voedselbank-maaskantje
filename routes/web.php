<?php

use App\Http\Controllers\VoedselPakketController;
use App\Http\Controllers\VoorraadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductallergieController;
use App\Http\Controllers\AllergieController;
use App\Http\Controllers\klantController;
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

// is the route for the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/klant', [klantController::class, 'overzicht_klant'])->name('klant.overzicht_klant');

Route::get('/klant/toevoegen', [klantController::class, 'toevoegen'])->name('klant.toevoegen');

Route::post('/klant/store', [klantController::class, 'store'])->name('klant.store');

Route::get('/klant/wijzigen/{klant}', [klantController::class, 'wijzigen'])->name('klant.wijzigen');

Route::put('/klant/update/{klant}', [klantController::class, 'update'])->name('klant.update');

Route::delete('/klant/verwijderen/{klant}', [klantController::class, 'verwijderen'])->name('klant.verwijderen');

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

// Allergieen
Route::get('/allergie', [ProductallergieController::class, 'overzicht_allergieen']);

Route::get('/allergie/allergien_list', [ProductallergieController::class, 'wijzig'])->name('allergieen.list');

Route::get('/allergie/{id}/allergie_wijzig', 'App\Http\Controllers\AllergieController@wijzig')->name('allergie.wijzig');
Route::post('/allergie/{id}/allergie_wijzig', 'App\Http\Controllers\AllergieController@wijzig')->name('allergie.wijzig');
Route::put('/allergie/{id}/allergie_wijzig', 'App\Http\Controllers\AllergieController@update')->name('allergie.wijzig');

Route::get('/allergie/allergie_toevoegen', 'App\Http\Controllers\AllergieController@toevoegen')->name('allergie.toevoegen');
Route::post('/allergie/store', 'App\Http\Controllers\AllergieController@store')->name('allergie.store');

Route::delete('/allergie/{id}/allergie_verwijder', 'App\Http\Controllers\AllergieController@verwijder')->name('allergie.verwijder');

// Voedselpakketen
// is the route for the overzicht page
Route::get('/voedselpakket', [VoedselPakketController::class, 'overzicht_voedsel_pakket'])->name('overzicht');

// is the route for the create page
Route::get('/voedselpakket/create', [VoedselPakketController::class, 'create'])->name('create');

// is the route for the store method
Route::post('/voedselpakket/store', [VoedselPakketController::class, 'store'])->name('store');

// is the route for the edit page
Route::get('/voedselpakket/edit/{pakketId}', [VoedselPakketController::class, 'edit'])->name('edit');

// is the route for the update method
Route::put('/voedselpakket/update/{pakketId}', [VoedselPakketController::class, 'update'])->name('update');

// is the route for the delete method
Route::get('/voedselpakket/delete/{pakketId}', [VoedselPakketController::class, 'delete'])->name('delete');
