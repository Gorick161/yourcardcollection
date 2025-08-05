<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ➤ 1. Root-URL direkt weiterleiten auf /login (wenn nicht eingeloggt)
Route::get('/', function () {
    return redirect('/login');
});

// ➤ 2. /login zeigt dein eigenes Tailwind-Login-Formular
Route::get('/login', function () {
    return view('auth.custom-login');
})->name('login')->middleware('guest');

// ➤ 3. Dashboard bleibt geschützt für eingeloggte Nutzer
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ➤ 4. Authentifizierte Bereiche
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('cards', CardController::class);
});

// ➤ 5. Breeze Auth-Routen (POST /login etc.)
require __DIR__.'/auth.php';
