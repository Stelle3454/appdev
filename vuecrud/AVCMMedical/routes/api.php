<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvcmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientSchedController;
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
//default
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::resource('/doctors', AvcmController::class);


Route::resource('/patient', PatientController::class);


Route::resource('/login', LoginController::class);

Route::post('/register', [UserController::class, 'register']); // user
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);


//patients appointment

Route::resource('/patientsched', PatientSchedController::class);


