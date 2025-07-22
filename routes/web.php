<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDeProduse;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ControllerDeProduse::class, 'index'])->name('product.index');
Route::get('/product/create', [ControllerDeProduse::class, 'create'])->name('product.create');
Route::post('/product', [ControllerDeProduse::class, 'store'])->name('product.store');
Route::get('/products', [ControllerDeProduse::class, 'showAll'])->name('product.showAll');
Route::get('/product/{id}/edit', [ControllerDeProduse::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ControllerDeProduse::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ControllerDeProduse::class, 'destroy'])->name('product.destroy');
