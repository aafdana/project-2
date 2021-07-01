<?php

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


// LOGIN CONTROL
Route::get('/login',\App\Http\Controllers\LoginController::class . '@index')->name('login');
Route::post('/postlogin',\App\Http\Controllers\LoginController::class . '@postlogin');
Route::get('/logout',\App\Http\Controllers\LoginController::class . '@logout');


Route::group(['middleware' => 'auth'],function(){

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/tambahadmin',\App\Http\Controllers\RegisterController::class . '@tambahadmin');
    Route::get('/user',\App\Http\Controllers\RegisterController::class . '@index');
    Route::get('/user/tambahadmin',\App\Http\Controllers\RegisterController::class . '@create');
    Route::post('/user/registuser',\App\Http\Controllers\RegisterController::class . '@store');

    Route::get('/registcustomer',\App\Http\Controllers\RegisterCustomerController::class . '@registcustomer');
    Route::get('/user',\App\Http\Controllers\RegisterCustomerController::class . '@index');
    Route::get('/user/registcustomer',\App\Http\Controllers\RegisterCustomerController::class . '@createCustomer');
    Route::post('/user/registercustomer',\App\Http\Controllers\RegisterCustomerController::class . '@storeCustomer');

    Route::get('/petani',\App\Http\Controllers\RegisterPetaniController::class . '@index');
    Route::get('/formpetani',\App\Http\Controllers\RegisterPetaniController::class . '@create');
    Route::post('/tabelpetani',\App\Http\Controllers\RegisterPetaniController::class . '@store');

    Route::post('/petani/data-kota',\App\Http\Controllers\RegisterPetaniController::class . '@kota');
    Route::post('/petani/data-kecamatan',\App\Http\Controllers\RegisterPetaniController::class . '@kecamatan');
    Route::post('/petani/data-kelurahan',\App\Http\Controllers\RegisterPetaniController::class . '@kelurahan');



    
});