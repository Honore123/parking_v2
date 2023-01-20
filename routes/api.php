<?php

use App\Http\Controllers\api\SpaceApiController;
use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\BookingController;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('booking')->group(function(){
    Route::get('{client}', [BookingController::class,'index']);
    Route::get('check/{client}',[BookingController::class, 'show']);
    Route::post('',[BookingController::class, 'store']);
});
Route::post('users/login',[AuthApiController::class,'login']);
Route::get('users/logout', [AuthApiController::class,'logout']);
Route::get('space', [SpaceApiController::class,'index']);