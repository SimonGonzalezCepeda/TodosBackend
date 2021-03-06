<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'auth'], function(){
    Route::get('/tasks',function() {
        return view('tasks');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boxmodel', function () {
    return view('boxmodel');
});

Route::get('/floatmodel', function () {
    return view('floatmodel');
});

Route::get('/layoutfloat', function () {
    return view('layoutfloat');
});

Route::get('/csstables', function () {
    return view('csstables');
});

Route::get('/flexboxlayout', function () {
    return view('flexboxlayout');
});

Route::get('/bootstraplayout', function () {
    return view('bootstraplayout');
});