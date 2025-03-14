<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('project.index');
});


Route::get('/quartos', [ProdutoController::class, 'quarto']);

Route::get('/Check-in', [ProdutoController::class, 'checkin']);


Route::get('/faturas', function () {
    return view('project.fatura');
});

Route::get('/', function () {
    return view('project.index');
});





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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('project.dashboard');
    })->name('dashboard');
});
