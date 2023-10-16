<?php

use App\Http\Controllers\FourWController;
use App\Http\Controllers\GetFourW;
use App\Http\Controllers\GetTwoWHanda;
use App\Http\Controllers\GetTwoWheller;
use App\Http\Controllers\PostTwoWHanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('insertTwoWheelerInfo',('App\Http\Controllers\TwoWheelerController@insertTwoWheelerInfo'));
Route::post("putFourW",[FourWController::class,'GetFourW']);
Route::post("postTwoWHanda",[PostTwoWHanda::class,"PostTwoWHanda"]);

Route::get("TwoWheeler",[GetTwoWheller::class,'index']);
Route::get("FourWheller",[GetFourW::class,'index']);
Route::get("Honda",[GetTwoWHanda::class,"index"]);