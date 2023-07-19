<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/customer_registration', AuthController::class, 'CustomerRegistration');
Route::post('/agent_registration', AuthController::class, 'AgentRegistration');
Route::post('/customer_login', AuthController::class, 'CustomerLogin');
Route::post('/agent_login', AuthController::class, 'AgentLogin');
Route::post('/logout', AuthController::class, 'Logout');

Route::post('/save_package', PackageController::class, 'save_package');
Route::post('/get_package{$id}', PackageController::class, 'get_package');
Route::post('/get_packages', PackageController::class, 'get_packages');