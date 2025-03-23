<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('project.landingPage');
});

Route::get('/reserve-online', [ProdutoController::class, 'reserva_on']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ProdutoController::class, 'index'])->name('dashboard');

    Route::get('/quartos', [ProdutoController::class, 'quarto']);

    Route::get('/hospedes', [ProdutoController::class, 'hospedes']);

    Route::get('/Check-in', [ProdutoController::class, 'checkin']);

    Route::get('/faturas', [ProdutoController::class, 'fatura']);

    Route::get('/add-quarto', [ProdutoController::class, 'add_quarto']);

    Route::get('/ver', function () {
        return view('project.ver');
    });


});


/**
Route::middleware(['admin'])->group(function(){
    Route::get('/admin', function () {
        return dd('administrado');
    });
});

Route::middleware(['maneger'])->group(function(){
    Route::get('/maneger', function () {
        return dd('gerente');
    });
});
**/
