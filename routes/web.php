<?php

use App\Http\Controllers\DemoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',[DemoController::class,'getUser']);
Route::get('/profile',[DemoController::class,'getProfile']);

Route::get('/user_post',[DemoController::class,'userWithPost']);
Route::get('/post_user',[DemoController::class,'postWithUser']);

Route::get('/user_comment',[DemoController::class,'userComment']);
Route::get('/post_tag',[DemoController::class,'postWithTag']);