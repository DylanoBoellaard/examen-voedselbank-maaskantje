<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductallergieController;

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
