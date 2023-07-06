<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\KambingController;
use App\Http\Controllers\SapiController;
use App\Http\Controllers\RiwayatController;
use App\Models\Riwayat;

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


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logoutuser', [AuthController::class, 'logout']);
});

Route::group(['middleware' => ['auth:sanctum', 'admin']], function () {
    //kambing
    Route::post('/tambahkambing', [KambingController::class, 'kambing']);
    Route::post('/hapuskambing', [KambingController::class, 'hapus']);
    Route::post('/semuakambing', [KambingController::class, 'all']);

    //sapi
    Route::post('/tambahsapi', [SapiController::class, 'sapi']);
    Route::post('/hapussapi', [SapiController::class, 'hapus']);
    Route::post('/semuasapi', [SapiController::class, 'all']);

    //riwaya
    Route::post('/pesan', [RiwayatController::class, 'pesan']);


    Route::post('/logoutadmin', [AuthController::class, 'logout']);
});
