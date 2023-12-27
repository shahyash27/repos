<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\User;
use App\Http\Controllers\API\Contacts;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//2|CezmypiPqZGbq0PimK3QwWyaop1ahwTmf3hN776La47a7205

Route::get('/user',[User::class,'index']);

Route::post('/user/register',[User::class,'register']);
Route::post('/user/login',[User::class,'login']);

Route::middleware('auth:sanctum')->group(function() {
	Route::get('/contacts/list',[Contacts::class,'list']);
});