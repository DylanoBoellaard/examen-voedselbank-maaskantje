<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductallergieController;
use App\Http\Controllers\AllergieController;

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

Route::get('/allergie', [ProductallergieController::class, 'overzicht_allergieen']);

Route::get('/allergie/allergien_list', [ProductallergieController::class, 'wijzig'])->name('allergieen.list');

Route::get('/allergie/{id}/allergie_wijzig', 'App\Http\Controllers\AllergieController@wijzig')->name('allergie.wijzig');
Route::post('/allergie/{id}/allergie_wijzig', 'App\Http\Controllers\AllergieController@wijzig')->name('allergie.wijzig');
Route::put('/allergie/{id}/allergie_wijzig', 'App\Http\Controllers\AllergieController@update')->name('allergie.wijzig');

Route::get('/allergie/allergie_toevoegen', 'App\Http\Controllers\AllergieController@toevoegen')->name('allergie.toevoegen');
Route::post('/allergie/store', 'App\Http\Controllers\AllergieController@store')->name('allergie.store');

Route::delete('/allergie/{id}/allergie_verwijder', 'App\Http\Controllers\AllergieController@verwijder')->name('allergie.verwijder');
