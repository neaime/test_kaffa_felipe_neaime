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
