<?php

use App\Http\Controllers\LaguController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('lagu.index');
});


Route::get('/lagu', [LaguController::class, 'index'])->name('lagu.index');
Route::get('/lagu/create', [LaguController::class, 'create'])->name('lagu.create');
Route::get('/lagu/{lagu}', [LaguController::class, 'show'])->name('lagu.show');
Route::post('/lagu', [LaguController::class, 'store'])->name('lagu.store');
Route::get('/lagu/{lagu}/edit', [LaguController::class, 'edit'])->name('lagu.edit');
Route::put('/lagu/{lagu}/edit', [LaguController::class, 'update'])->name('lagu.update');
Route::delete('/lagu/{lagu}/edit', [LaguController::class, 'destroy'])->name('lagu.destroy');

Route::get('/', function () {
    return to_route('lagu.index');
});

