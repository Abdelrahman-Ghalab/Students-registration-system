<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SectionControl@slots');
  //  return view('start');

Route::get('show/{sect}','SectionControl@show');
Route::get('admin', function (){
  return view('show_sections');
});
Route::get('ajax',function(){
   return view('message');
});
Route::post('/getmsg','AjaxController@index');
Route::post('{sect}/section', 'SectionControl@store');
Route::post('{sect}/re_section', 'SectionControl@re_register');
Route::get('{sect}/register', function(){
  return view('register');
});
