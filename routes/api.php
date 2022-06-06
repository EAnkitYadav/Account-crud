<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SetDataController;
use App\Http\Controllers\API\UserAuthController;

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
Route::middleware('auth:api')->group(function() {
Route::post('create',[SetDataController::class,'create']);
Route::get('/index',[SetDataController::class,'index']);
Route::get('/show',[SetDataController::class,'show']);
Route::post('/update',[SetDataController::class,'update']);
Route::post('/delete',[SetDataController::class,'delete']);
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register',[UserAuthController::class,'register']);
Route::post('/login', [UserAuthController::class,'login']);
Route::post('/logout', [UserAuthController::class,'logout']);
