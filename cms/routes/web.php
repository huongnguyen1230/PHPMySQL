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

//chương7
Route::get('/insert', function (){
    DB:: insert ('insert into posts (title, body, is_admin) values(?,?,?)',['PHP with Laravel', 'Laravel is good for framework',0]);
    return 'DONE';
});

Route::get('/read', function (){
    $result = DB::select('select*from posts where id=?',[1]);
//    return $result;
//    foreach ($result as $post){
//        return $post->title;
//    }
    foreach ($result as $post){
        return $post->body;
    }
});

Route::get('/update', function (){
   $update = DB::update('update posts set title = "Hello Laravel" where id > ?', [1]);
   return $update;
});

Route::get('/delete', function (){
    $delete = DB::delete('delete from posts  where id = ?', [1]);
    return $delete;
});

