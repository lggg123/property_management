<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\MaintenanceRequestController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\LeaseController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('properties', PropertyController::class);
Route::apiResource('leases', LeaseController::class);
Route::apiResource('tenants', TenantController::class);
Route::apiResource('maintenance', MaintenanceRequestController::class);
