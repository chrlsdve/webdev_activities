<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Authentication routes (login, register, logout)
Auth::routes();

// Redirect root to student dashboard
Route::get('/', function () {
    return redirect()->route('students.index');
});

// Protect student routes behind auth
Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
});
