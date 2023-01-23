<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlijentController;
use App\Http\Controllers\RezervacijaController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::get('klijent', [KlijentController::class, 'index']);

Route::get('klijent/{klijent}', [KlijentController::class, 'show']);

Route::get('rezervacija', [RezervacijaController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::put('klijent/{klijent}', [KlijentController::class, 'update']);
    Route::delete('klijent/{klijent}', [KlijentController::class, 'destroy']);
    Route::delete('rezervacija/{rezervacija}', [RezervacijaController::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
