<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});
// CHANGED: The root '/' route now shows the registration form
Route::get('/', [RegisterController::class, 'create'])->name('register.create');

// Route to HANDLE the form submission
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route to SHOW the success page (using the new 'success.blade.php' view)
Route::get('/register/success', [RegisterController::class, 'success'])->name('register.success');
