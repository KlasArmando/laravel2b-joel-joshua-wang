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
    $name = "Joel";
    return view('welcome' , compact('name'));
});

Route::get('/hoi', function () {
    //var van php in route zetten
    $class = "michael";
    //compact required voor php varname= var die je hebt gegeven om het te vinden/activeren
    return view('test', compact('class'));
});


Route::get('/books', function () {
    $resultaten = DB::table('books')->get();
    return view('books' , compact('resultaten'));
});

Route::get('/master1', function () {
    $master = "master";
    return view('master' , compact('master1'));
});

Route::get('/blade', function () {
    return view('layout');
});

Route::get('create', function()
{
    return View::make('users/create');
});


Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::post('/users/update/{id}', 'UsersController@update')->name('users.update');
Route::get('users/create', 'UsersController@create')->name('users.create');
Route::delete('/users/{id}', 'UsersController@destroy');

Route::get('/project', 'ProjectController@index')->name('project.index');
Route::get('/project/edit/{id}', 'ProjectController@edit')->name('project.edit');
Route::get('/project/allcontact/{id}', 'ProjectController@allcontact')->name('project.allcontact');
Route::post('/project/update/{id}', 'ProjectController@update')->name('project.update');
Route::get('/project/contact', 'ProjectController@create')->name('project.create');
Route::post('/project', 'ProjectController@store')->name('project.store');
Route::delete('/project/{id}', 'ProjectController@destroy');