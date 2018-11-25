<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['namespace'=>'Home'],function (){
    //首页
    Route::get('/','IndexController@index');
});

Route::get('/task','TaskController@home');
Route::get('task/create', 'TaskController@create');
Route::post('task', 'TaskController@store');

//Route::fallback(function (){
//   return '我们是最后的屏障';
//});

//Route::middleware('throttle:60,1')->group(function () {
//    Route::get('/user', function () {
//        //
//    });
//});