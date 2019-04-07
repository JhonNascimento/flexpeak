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

Route::get('/', 'AlunoController@index');

Route::resource('aluno','AlunoController');
Route::resource('curso','CursoController');
Route::resource('professor','ProfessorController');

Route::get('/buscacep', [
  'uses' => 'AlunoController@buscacep'
]);

Route::get('/pdf', [
  'uses' => 'AlunoController@pdf'
]);
