<?php

use App\Http\Controllers\formationController;
use App\Http\Controllers\TestController;
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



Route::get('/search',function(){
  return view('search');
});

Route::get('/searchFormation', [formationController::class,'searchFormation']);

//

Route::get('/',[TestController::class, 'productlist']);
Route::get('/findProductName',[TestController::class, 'findProductName']);
Route::get('/findPrice',[TestController::class, 'findPrice']);


