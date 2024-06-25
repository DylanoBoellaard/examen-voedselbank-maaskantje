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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voedselpakket', [VoedselPakketController::class, 'overzicht_voedsel_pakket'])->name('overzicht');

Route::get('/voedselpakket/create', [VoedselPakketController::class, 'create'])->name('create');

Route::post('/voedselpakket/store', [VoedselPakketController::class, 'store'])->name('store');

Route::get('/voedselpakket/edit/{pakketId}', [VoedselPakketController::class, 'edit'])->name('edit');

Route::put('/voedselpakket/update/{pakketId}', [VoedselPakketController::class, 'update'])->name('update');
