<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', [PessoaController::class, 'index'])->name('pessoa.index');
Route::get('/completo', [PessoaController::class, 'completo'])->name('pessoa.completo');
Route::get('/create', [PessoaController::class, 'create'])->name('pessoa.create');
Route::post('/store', [PessoaController::class, 'store'])->name('pessoa.store');
Route::delete('/destroy/{pessoa}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');

require __DIR__.'/auth.php';
