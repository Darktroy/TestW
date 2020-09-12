<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','TestingCasesController@index')
    ->name('testing_cases.testing_case.index');
//     return view('welcome');
;

Route::group([
    'prefix' => 'testing_cases',
], function () {
//     Route::get('/', 'TestingCasesController@index')
//          ->name('testing_cases.testing_case.index');
    Route::get('/create','TestingCasesController@create')
         ->name('testing_cases.testing_case.create');
    Route::get('/show/{testingCase}','TestingCasesController@show')
         ->name('testing_cases.testing_case.show')->where('id', '[0-9]+');
    Route::get('/{testingCase}/edit','TestingCasesController@edit')
         ->name('testing_cases.testing_case.edit')->where('id', '[0-9]+');
    Route::post('/', 'TestingCasesController@store')
         ->name('testing_cases.testing_case.store');
    Route::put('testing_case/{testingCase}', 'TestingCasesController@update')
         ->name('testing_cases.testing_case.update')->where('id', '[0-9]+');
    Route::delete('/testing_case/{testingCase}','TestingCasesController@destroy')
         ->name('testing_cases.testing_case.destroy')->where('id', '[0-9]+');
});
