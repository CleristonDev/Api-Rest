<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function (Request $request){

    $response = new \Illuminate\Http\Response(json_encode(['msg'=>'Minha primeira respota de API']));
    $response->header('Content-Type','application/json');

    return $response;
});

Route::get('/products', function(){
    return Product::all();
});