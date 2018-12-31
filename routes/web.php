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

Route::get('/', function () {
    return redirect('/home');
    // return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function()
{
    
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/employee','employeeController');

Route::get('/removeimg/{id}','employeeController@removeEmployeeImage')->name('removeimg');

Route::resource('/product','ProductController');

Route::get('/multiImage','commanController@multiImage')->name('multiImage');
Route::post('/imageUpload','commanController@imageUpload')->name('imageUpload');


//----Template pages start from here---- 

Route::get('/dashboard', function () {
	return view('theme.dashboard');
});

Route::get('inbox', function () {
	return view('theme.inbox');
});

Route::get('/gallery', function () {
	return view('theme.gallery');
});

Route::get('/charts', function () {
	return view('theme.charts');
}); 

Route::get('/icons', function () {
	return view('theme.icons');
});

Route::get('/typography', function () {
	return view('theme.typography');
});

Route::get('/faq', function () {
	return view('theme.faq');
});

Route::get('/errorpage', function () {
	return view('theme.errorpage');
});

Route::get('/button', function () {
	return view('theme.button');
});

Route::get('/grid', function () {
	return view('theme.grid');
});

Route::get('/tabels', function () {
	return view('theme.tabels');
});

Route::get('/maps', function () {
	return view('theme.maps');
});


Route::get('/calendar', function () {
	return view('theme.calendar');
});

Route::get('/signin', function () {
	return view('theme.signin');
});

Route::get('/signup', function () {
	return view('theme.signup');
});

Route::get('/input', function () {
	return view('theme.input');
});

Route::get('/validation', function () {
	return view('theme.validation');
});
});
//-----Template pages end here----
