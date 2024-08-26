<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home/clinica', function () {
    return view('clinica');
})->middleware(['auth', 'verified'])->name('clinica');

Route::get('/home/pets', function () {
    return view('pets');
})->middleware(['auth', 'verified'])->name('pets');

Route::get('/home/pets/lembrete', function () {
    return view('forms.lembrete');
})->middleware(['auth', 'verified'])->name('lembrete');

Route::get('/home/pets/arquivo', function () {
    return view('forms.arquivo');
})->middleware(['auth', 'verified'])->name('arquivo');

Route::get('/home/notificacoes', function () {
    return view('notificacoes');
})->middleware(['auth', 'verified'])->name('notificacoes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
