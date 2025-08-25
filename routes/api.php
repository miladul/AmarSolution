<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\StudentAuthController;
use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/student/login', [StudentAuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    //admin
    Route::post('/admin/logout', [AuthController::class, 'logout']);
    Route::get('/admin/me', [AuthController::class, 'me']);

    //student
    Route::post('/student/logout', [StudentAuthController::class, 'logout']);
    Route::get('/student/me', [StudentAuthController::class, 'me']);

});


Route::post('/students/import', [StudentController::class, 'import']);
Route::get('/students/export', [StudentController::class, 'export']);



