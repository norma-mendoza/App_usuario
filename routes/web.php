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
    return view('welcome');
});

Route::get('/usuarios', 'UserController@index');


Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('/saludo/{nombre}/{apodo?}', function ($nombre, $apodo = null) {
    if ($apodo){ 
        return "Bienvenido {$nombre}, tu apodo es {$apodo}";
    }else{
        return "Bienvenido {$nombre}, no tienes apodo";
    }
   
});

