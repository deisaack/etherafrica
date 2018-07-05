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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');
Route::get('/about-us','PagesController@about_us');
Route::get('/blog','PagesController@blog');

//Route to get/post contact info
Route::match(['get', 'post'],'/contact-form', 'HeaderController@addContact');


//The following routes deal with the admin
Route::match(['get', 'post'],'/admin', 'AdminController@login');

Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/dashboard', 'AdminController@dashboard');
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@chkPassword');
	Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');

	//Blogs and Info Routes (Admin)
	Route::match(['get','post'],'/admin/headerinfo/about','HeaderController@addDetails');
	Route::match(['get','post'],'/admin/headerinfo/home','HeaderController@addHome');
	Route::match(['get','post'],'/admin/add_blog','HeaderController@addBlog');
	Route::get('/admin/headerinfo/view_blogs','HeaderController@viewBlogs');
	Route::get('/admin/headerinfo/view_homeinfo','HeaderController@viewHome');
	Route::get('/admin/headerinfo/view_team','HeaderController@viewTeam');
	Route::get('/admin/headerinfo/view_about','HeaderController@viewAbout');

	Route::match(['get','post'],'/admin/edit_blog/{id}','HeaderController@editBlog');
	Route::match(['get','post'],'/admin/edit_home/{id}','HeaderController@editHome');
	Route::match(['get','post'],'/admin/edit_team/{id}','HeaderController@editTeam');

	
	Route::match(['get','post'],'/admin/delete_blog/{id}','HeaderController@deleteBlog');
	Route::match(['get','post'],'/admin/delete_home/{id}','HeaderController@deleteHome');
	Route::match(['get','post'],'/admin/delete_team/{id}','HeaderController@deleteTeam');
	Route::get('/admin/delete_home_image/{id}', 'HeaderController@deleteHomeImage');
	Route::match(['get','post'],'/admin/delete_about/{id}','HeaderController@deleteAbout');
	Route::match(['get','post'],'/admin/headerinfo/team','HeaderController@addTeam');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
