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

Route::get('/','HomeController@showWelcome');

Route::get('/', function () {
   return view('welcome');
});

Route::get('home', 'HomeController@showWelcome');
Route::get('about','AboutController@showDetails');
Route::get('about/{theSubject}','AboutController@showSubject');

//chuong3.11
Route::get('about',function(){
   return 'about content';
});

//chuong3.12
Route::get('about/directions',function(){
    return 'Directions go here';
});
Route::any('submit-form',function(){
    return 'Process Form';
});

//chuong3.13
Route::get('about/{theSubject}',function ($theSubject){
    return $theSubject. ' content here';
});

//chuong3.14
Route::get('about/{Art}/{Price}',function($Art,$Price){
    return "$Art and $Price";
});

//chuong3.16
Route::get('where',function(){
    return redirect('about/directions');
});

//chuong5.22
Route::get('profile/{name}','ProfileController@showProfile');
