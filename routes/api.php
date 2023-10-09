<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StokController;
use App\Http\Controllers\api\LoginFFController;
use App\Http\Controllers\api\LoginJubelioController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     Route::post('loginjubelio', 'LoginController@login');
//     return $request->user();
// });
Route::post('/loginjubelio', [LoginJubelioController::class, 'login']);
Route::post('/loginff', [LoginFFController::class, 'login']);
Route::get('/getdata',[StokController::class, 'getData']);
Route::get('/getstok',[StokController::class, 'getStok']);
// Route::get('/getstok',[StokController::class, 'getstokff']);
// Route::middleware('auth:api')->group(function () {
//     Route::get('getstok',[StokController::class, 'getStock']);
// });
