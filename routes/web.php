<?php

use App\Http\Controllers\ProfileController;
use App\Models\Noticia;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $noticias = Noticia::all();
    return view('dashboard', ['noticias' => $noticias]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
