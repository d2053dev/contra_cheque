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
Route::get('/',['uses' => 'Controller@homepage']);
Route::get('/cadastro',['uses' => 'Controller@cadastrar']);





//rotas de autenticação

Route::get('/login',['uses' => 'Controller@fazerlogin']);
Route::post('/login',['as' => 'user.login', 'uses' => 'DashboardController@auth']);
Route::get('/dashboard',['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);

Route::get('user',['as' => 'user.index', 'uses' => 'UsersController@index']);

//Route::get('cliente',['as' => 'cliente.index', 'uses' => 'ClientesController@index']);

Route::get('rescisao', ['as' => 'rescisao.index', 'uses' => 'RescisaoController@index']);

Route::resource('cliente', 'ClientesController');
