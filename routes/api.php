<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login-test', function(){
    return 'hai';
});

Route::post('/login',[App\Http\Controllers\AuthController::class,'login']);
Route::post('/register',[App\Http\Controllers\AuthController::class,'register']);
Route::get('/validate-token',[App\Http\Controllers\AuthController::class,'validateToken']);

// Route::get('/students',[App\Http\Controllers\StudentController::class, 'index']);
// Route::get('/student/{id}',[App\Http\Controllers\StudentController::class, 'show']);
// Route::get('/student-add',[App\Http\Controllers\StudentController::class, 'create']);
// Route::post('/student',[App\Http\Controllers\StudentController::class, 'store']);
// Route::get('/student-edit/{id}',[App\Http\Controllers\StudentController::class, 'edit']);


// Route::get('/query-builder',[StudentController::class,'queryBuilder']);
// Route::get('/study-colllection',[StudentController::class,'studyCollection']);
// Route::get('/class',[StudentClassController::class,'index']);
// Route::get('/extracurricular',[ExtracurricularController::class,'index']);
// Route::get('/teacher',[TeacherController::class,'index']);