<?php

use App\Http\Controllers\CarbonDioxideController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntranceController;
use App\Http\Controllers\ParkingSpaceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TemperatureDataController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('',DashboardController::class)->name('dashboard');;
    
    Route::prefix('space')->group(function() {
        Route::get('', [ParkingSpaceController::class, 'index'])->name('space.index');
        Route::get('{space}', [ParkingSpaceController::class, 'booking'])->name('space.booking');
    });
    Route::prefix('payment')->group(function() {
        Route::get('', [PaymentController::class, 'index'])->name('payment.index');
    });
    Route::prefix('setting')->group(function() {
        Route::get('', [UserController::class, 'index'])->name('setting.index');
        Route::put('{user}', [UserController::class, 'update'])->name('setting.update');
    });
    
    Route::get('temperature/chart/data', [TemperatureDataController::class, 'temperatureData']);
    Route::get('carbon/chart/data', [CarbonDioxideController::class, 'carbonData']);

});

Route::get('temperature/device/{data}', [TemperatureDataController::class, 'store']);
Route::get('carbon/device/{data}', [CarbonDioxideController::class, 'store']);
Route::get('parking/availability/{space}/{data}', [ParkingSpaceController::class, 'update']);
Route::get('door/open', [EntranceController::class, 'doorOpen']);
Route::get('door/close', [EntranceController::class, 'doorClose']);

require __DIR__.'/auth.php';
