<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [FrontEndController::class, 'index']);
Route::get('formularios', [FrontEndController::class, 'index']);
Route::get('formularios/{idFormulario}', [FrontEndController::class, 'show']);





Route::middleware('auth')->group(function () {

    Route::get('eventos/mis_eventos', [FrontEndController::class, 'eventos_mis_eventos']);

    Route::get('eventos/solicitar_aval', [FrontEndController::class, 'eventos_solicitar_aval']);
    Route::post('eventos/solicitar_aval', [FrontEndController::class, 'eventos_store_solicitar_aval']);
});


require __DIR__.'/auth.php';
