<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/students', [WebController::class, 'students']);
Route::post('/students', [WebController::class, 'storeStudent']);
Route::get('/lessons', [WebController::class, 'lessons']);
Route::post('/lessons', [WebController::class, 'storeLesson']);
Route::get('/exams', [WebController::class, 'exams']);
Route::post('/exams', [WebController::class, 'storeExam']);
Route::get('/payments', [WebController::class, 'payments']);
Route::post('/payments', [WebController::class, 'storePayment']);
Route::get('/followups', [WebController::class, 'followups']);
Route::post('/followups/weekly', [WebController::class, 'storeWeekly']);
Route::post('/followups/monthly', [WebController::class, 'storeMonthly']);
Route::get('/messages', [WebController::class, 'messages']);
Route::post('/messages', [WebController::class, 'storeMessage']);
Route::get('/chat', [WebController::class, 'chat']);
Route::post('/chat', [WebController::class, 'postChat']);
});
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
Route::post('/api/login', [\App\Http\Controllers\AuthController::class, 'apiLogin']);
