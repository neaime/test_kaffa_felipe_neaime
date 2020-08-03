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

/**
** Routes exercise 5
**/
Route::get('/exercise-5', 'TodoListController@index')->name('exercise-5');
Route::get('/exercise-5/getdata', 'TodoListController@getData')->name('getData');
Route::post('/exercise-5/store', 'TodoListController@store')->name('todo.store');
Route::delete('/exercise-5/destroy/{id}', 'TodoListController@destroy');

/**
** Routes exercise 6
**/
Route::get('/exercise-6', function () {
    return view('exercise-6.index');
});

/**
** Routes exercise 7
**/
Route::get('/exercise-7', function () {
    return view('exercise-7.index');
});


/**
** Routes exercise 8
**/
Route::get('/exercise-8', function () {
    return view('exercise-8.index');
});


/**
** Routes exercise 9
**/
Route::get('/exercise-9', function () {
    return view('exercise-9.index');
});
