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

Route::get('/', function () {
    return view('welcome');
});

//by default this will return a json collection
//the 'as' is a keyed name
//route groups will resolve .../api/products

Route::group(['prefix'=>'api'], function(){
  /*Route::get('products',['as' => 'products',function(){
    return App\Product::all();
  }]);*/
  //the only limits the route to look for the items in that array
  Route::resource('products','ProductController',['only'=>['index','store','update']]);
  Route::resource('products.descriptions','ProductDescriptionController',['only'=>['index','store']]);
});
