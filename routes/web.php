<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantController;

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
Route::get('/klant', [klantController::class, 'overzicht_klant'])->name('klant.overzicht_klant');

Route::get('/klant/toevoegen', [klantController::class, 'toevoegen'])->name('klant.toevoegen');

Route::post('/klant/store', [klantController::class, 'store'])->name('klant.store');

Route::get('/klant/wijzigen/{klant}', [klantController::class, 'wijzigen'])->name('klant.wijzigen');

Route::put('/klant/update/{klant}', [klantController::class, 'update'])->name('klant.update');
