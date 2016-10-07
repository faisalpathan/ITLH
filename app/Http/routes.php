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

//front end

Route::get('/','MyController@Home');
Route::get('/Home','MyController@Home');
Route::get('/products','MyController@products');
Route::get('/prodetails','MyController@prodetails');
Route::get('/checkout','MyController@checkout');
Route::get('/orderconfirm','MyController@orderconfirm');
Route::get('/signup','MyController@signup');
Route::get('/sendpass','MyController@sendpass');
Route::get('/resetpass','MyController@resetpass');
Route::get('/login','MyController@login');
Route::get('/orderhistory','MyController@orderhistory');
Route::get('/myprofile','MyController@myprofile');
Route::get('/editprofile','MyController@editprofile');

//back end

Route::get('/dashboard','MyController@dashboard');
Route::get('/orders','MyController@orders');
Route::get('/categories','MyController@categories');
Route::get('/addcategory','MyController@addcategory');
Route::get('/editcategory','MyController@editcategory');
Route::get('/listattributes','MyController@listattributes');
Route::get('/categoryproductlist','MyController@categoryproductlist');
Route::get('/backproducts','MyController@backproducts');
Route::get('/addproduct','MyController@addproduct');
Route::get('/editproduct','MyController@editproduct');
Route::get('/banners','MyController@banners');
Route::get('/staticpages','MyController@staticpages');
