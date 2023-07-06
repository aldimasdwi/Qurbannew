<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\JumlahController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\WebController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {return view('login');});

Route::get('/', function () {
    return view('lendingpage');
});

Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', function () {return view('registerrr');});



Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    //dashboard
    Route::get('/user', [JumlahController::class, 'indexx']);
    Route::post('/belisapi',[RiwayatController::class,'belisapi']);
    Route::post('/belikambing',[RiwayatController::class,'belikambing']);

    //history
    Route::get('/riwayat',[RiwayatController::class,'riwayat']);
    Route::post('/searchuser',[RiwayatController::class,'search']);
    Route::get('/cek/{id}',[RiwayatController::class,'cek']);

    Route::get('/logoutuser', [AuthController::class, 'logout']);
});




Route::group(['middleware' => ['auth:sanctum','admin']], function () {

    //history
    Route::get('/datauser',[RiwayatController::class,'riwayatt']);
    Route::post('/search', [RiwayatController::class, 'searchh']);
    Route::post('/status/{id}', [RiwayatController::class, 'status']);
    Route::post('/dipotong/{id}', [RiwayatController::class, 'dipotong']);
    Route::post('/dicaca/{id}', [RiwayatController::class, 'dicaca']);
    Route::post('/dibungkus/{id}', [RiwayatController::class, 'dibungkus']);



    //barang
    Route::get('/barang', [WebController::class, 'barang']);
    Route::get('/hapussapi/{id}', [WebController::class, 'hapussapi']);
    Route::get('/hapuskambing/{id}', [WebController::class, 'hapuskambing']);
    Route::post('/tambahqurban', [WebController::class, 'qurban']);
    Route::post('/harga', [WebController::class, 'harga']);
    Route::post('/ubahkambing/{id}', [WebController::class, 'ubahkambing']);
    Route::post('/ubahsapi/{id}', [WebController::class, 'ubahsapi']);


    //index
    Route::get('/admin', [JumlahController::class, 'index']);
    Route::post('/dipotong', [JumlahController::class, 'dipotong']);
    Route::post('/dicaca', [JumlahController::class, 'dicaca']);
    Route::post('/dibungkus', [JumlahController::class, 'dibungkus']);

    Route::post('/dipotongg', [JumlahController::class, 'dipotongg']);
    Route::post('/dicacaa', [JumlahController::class, 'dicacaa']);
    Route::post('/dibungkuss', [JumlahController::class, 'dibungkuss']);






    Route::get('/logout', [AuthController::class, 'logout']);
});
