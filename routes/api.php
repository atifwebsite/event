<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\EventsController;
use App\Http\Controllers\BannerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test',function(){
    p('hello');
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('list/{id}',[CategoryController::class,'getdata']);
Route::get('fetch-url-data', [EventsController::class, 'fetchdata']);
Route::get('data/{id}', [EventsController::class, 'fetchDataById']);
Route::get('banner/{id}',[CategoryController::class,'bannerdata']);

Route::get('events/hello', [EventsController::class, 'hello']);
