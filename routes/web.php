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

// Route::get('/hello', function () {
//     // return view('welcome');
//     return '<h1>Hello World</h1>';
// });

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

// Route::get('/about', function(){
//     return view('pages.about');
// });

// Route::get('/services', function(){
//     return view('pages.services');
// });

// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'This is user '.$name.' with an id of '.$id;
// });
Auth::routes();

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('students', 'StudentController');

Route::get('/blog', 'BlogsController@blog');

Route::get('students/generatePDF/{id}','StudentController@generatePDF');

Route::get('/export','StudentController@export')->name('export');
Route::post('/import','StudentController@import')->name('import');