<?php

use App\Http\Controllers\VoedselPakketController;
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

// is the route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

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
