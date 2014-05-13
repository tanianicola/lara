<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('hello');
});

Route::get('/test/about', function () {
    return '<h1>About</h1>';
});

Route::get('/test/help', function () {
    return '<h1>Help</h1>';
});
//named route
Route::get('/test/help1', array('as' => 'test.help1', function () {
    return '<h1>Help1</h1>';
}
));
Route::get('/test/about/view', function () {
    return View::make('about');
});

Route::get('/test/help/controller', array('as'=>'test.controller','uses'=>'HomeController@showTest')

);
//doorgeven van parameters
Route::get('/test/showname/{voornaam}/{naam} ', array('as'=>'test.showname','uses'=>'HomeController@showName')

);
//Routing for Blog
Route::resource('blog','BlogController');
Route::post('category',array('as'=>'category.store','uses'=>'CategoryController@store'));
Route::resource('category','CategoryController');

