<?php

Route::get('/', function () {
    return view('welcome');
});

/**
** Routes exercise 1
**/
Route::get('/exercise-1', 'ValidateCNPJController@exercise1')->name('cnpj.exercise1');
Route::post('/exercise-1/validate', 'ValidateCNPJController@validateCNPJ')->name('cnpj.validate');

/**
** Routes exercise 2
**/
Route::get('/exercise-2', 'ValidateCNPJController@exercise2')->name('cnpj.exercise2');
Route::post('/exercise-2/validate', 'ValidateCNPJController@verifyCnpjTrue')->name('cnpj.verify.true');

/**
** Routes exercise 3
**/
Route::get('/exercise-3', 'RectaglesController@index')->name('exercise-3');

/**
** Routes exercise 4
**/
Route::get('/exercise-4', 'RectaglesController@exercise4')->name('exercise-4');
//Route::post('/exercise-3/intersect', 'RectaglesController@intersect')->name('rectangles.intersect');
