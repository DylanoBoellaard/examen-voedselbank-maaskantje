<?php

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
});

Route::get('/leverancier/create', [LeverancierController::class, 'create']);
Route::post('/leverancier', [LeverancierController::class, 'store']);
Route::get('/leverancier/show', [LeverancierController::class, 'show']);
Route::get('/leverancier/edit/{id}', [LeverancierController::class, 'edit']);
Route::put('/leverancier/{id}', [LeverancierController::class, 'update']);
Route::delete('/leverancier/{id}', [LeverancierController::class, 'destroy']);
