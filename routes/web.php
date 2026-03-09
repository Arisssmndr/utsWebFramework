<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    });

Route::get('/customer', [CustomersController::class,'index']);
Route::get('/customer/create', [CustomersController::class,'create']);
Route::post('/customer/store', [CustomersController::class,'store'] );
Route::get('/customer/update/{id}', [CustomersController::class,'update'] );
Route::put('/customer/edit/{id}', [CustomersController::class,'edit'] );
Route::delete('/customer/delete/{id}', [CustomersController::class,'destroy'] );


