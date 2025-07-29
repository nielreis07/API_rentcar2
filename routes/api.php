<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'API de aluguel de carros'], 200);
});

// agrupar api/cliente
Route::prefix('cliente')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    Route::post('/', [ClienteController::class, 'criar'])->name('cliente.criar');
    Route::put('/{id}', [ClienteController::class, 'atualizar'])->name('cliente.atualizar');
    Route::delete('/{id}', [ClienteController::class, 'deletar'])->name('cliente.deletar');
});

// agrupar api/carro
Route::prefix('carro')->group(function () {
    Route::get('/', [CarroController::class, 'index'])->name('carro.index');
    Route::get('/{id}', [CarroController::class, 'exibir'])->name('carro.exibir');
    Route::post('/', [CarroController::class, 'criar'])->name('carro.criar');
    Route::put('/{id}', [CarroController::class, 'atualizar'])->name('carro.atualizar');
    Route::delete('/{id}', [CarroController::class, 'deletar'])->name('carro.deletar');
});