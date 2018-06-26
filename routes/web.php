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
//roept de gecreeerde paginas op
Route::get('/', 'PagesController@index');
Route::get('/contact','PagesController@contact');
Route::get('/categories','PagesController@categories');
Route::get('/summer','PagesController@summer');
Route::get('/winter','PagesController@winter');
Route::post('/contact', ['as' => 'contact', 'uses' => 'PagesController@store']);

//creeert de about
Route::get('/about', 'PagesController@about');
Route::get('/about/aboutIndex' , 'AdminController@aboutIndex');
Route::get('/about/create', 'AdminController@createAbout');
Route::post('/about/create', 'AdminController@storeAbout');
Route::put('/about/{id}/', ['as' => 'about', 'uses' => 'AdminController@updateAbout']);
Route::get('/about/{id}/edit', ['as' => 'about', 'uses' => 'AdminController@editAbout']);
Route::delete('/delete/{id}', 'AdminController@destroy')->name('admin.destroy');

//creeert een nieuwe admin
Route::get('/admin/adminIndex' , 'AdminController@adminIndex');
Route::get('/admin/create', 'AdminController@createAdmin');
Route::post('/admin/create', 'AdminController@storeAdmin');
Route::put('/admin/{id}/', ['as' => 'admin', 'uses' => 'AdminController@updateAdmin']);
Route::get('/admin/{id}/edit', ['as' => 'admin', 'uses' => 'AdminController@editAdmin']);
Route::delete('admin/delete/{id}', 'AdminController@destroyAdmin')->name('admin.destroyAdmin');

// dit os voor de admins waar admins users kan editten
Route::get('/user/userIndex' , 'AdminController@userIndex');
Route::put('/user/{id}/', ['as' => 'admin', 'uses' => 'AdminController@updateUser']);
Route::get('/user/{id}/edit', ['as' => 'admin', 'uses' => 'AdminController@editUser']);
Route::delete('user/delete/{id}', 'AdminController@destroyUser')->name('admin.destroyUser');

//dit is voor de terms and privacy pagina die we kunnen we aanmaken
Route::get('/terms', 'PagesController@terms');
Route::get('/terms/termsIndex', 'AdminController@termsIndex');
Route::get('/terms/create', 'AdminController@createTerms');
Route::post('/terms/create', 'AdminController@storeTerms');
Route::put('/terms/{id}/', ['as' => 'about', 'uses' => 'AdminController@updateTerms']);
Route::get('/terms/{id}/edit', ['as' => 'about', 'uses' => 'AdminController@editTerms']);
Route::delete('terms/delete/{id}', 'AdminController@destroyTerms')->name('admin.destroyTerms');


//dit is onze contact pagina
Route::get('/contact/contactIndex', 'AdminController@contactIndex');
Route::get('/comment/commentIndex', 'AdminController@commentIndex');
Route::get('/comment/create', 'AdminController@createComment');
Route::post('/comment/create', 'AdminController@storeComment');
Route::put('/comment/{id}/', ['as' => 'about', 'uses' => 'AdminController@updateComment']);
Route::get('/comment/{id}/edit', ['as' => 'about', 'uses' => 'AdminController@editComment']);
Route::delete('comment/delete/{id}', 'AdminController@destroyComment')->name('admin.destroyComment');

//dit zijn alle search functies
Route::get('searchcontent', 'AdminController@searchcontent');
Route::get('searchcontent2', 'AdminController@searchcontent2');
Route::get('searchcontent3', 'AdminController@searchcontent3');


Route::resource('posts', 'PostsController');

Auth::routes();

//user and admin dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::prefix('/admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});



