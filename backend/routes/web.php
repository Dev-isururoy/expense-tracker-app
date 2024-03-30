<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AuthController;

// Routes for expenses
Route::get('/expenses', [ExpenseController::class, 'index']);
Route::get('/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expenses/store', [ExpenseController::class, 'store']);
Route::get('/expenses/{id}/edit', [ExpenseController::class, 'edit']);
Route::put('/expenses/{id}/update', [ExpenseController::class, 'update']);
Route::get('/expenses/{id}', [ExpenseController::class, 'show']);
Route::delete('/expenses/{id}/delete', [ExpenseController::class, 'destroy']);

// Routes for authentication
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

// Other routes...

