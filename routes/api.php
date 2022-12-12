<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BusContractor;
use App\Http\Controllers\User;

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
Route::post('/Regestration',[User::class,'Regestration']);
Route::post('/Login',[User::class,'Login']);



Route::get('/Dashboard',[BusContractor::class,'Dashboard']);
Route::get('/TransactionView',[BusContractor::class,'TransactionView']);
Route::get('/CreateTransaction',[BusContractor::class,'CreateTransaction']);
Route::post('/AddTransaction',[BusContractor::class,'AddTransaction']);
Route::get('/DeleteTransaction/{id}',[BusContractor::class,'DeleteTransaction']);
Route::get('/UpdateTransaction/{id}',[BusContractor::class,'StoreTransaction']);
Route::post('/UpdateTransaction',[BusContractor::class,'UpdateTransaction']);
Route::get('/Profile/{id}',[BusContractor::class,'Profile']);
Route::Post('/ProfileUpdate',[BusContractor::class,'ProfileUpdate']);



