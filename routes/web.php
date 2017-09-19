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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Url pra autenticar o usuário e receber o Token pra acesso de requisições posteriores
Route::post('/niobio/user/auth', 'UsuarioController@auth');

// Url para adição de usuário
Route::post('/niobio/user/add', 'UsuarioController@addUser');

// Url pra alimentação da tabela do usuário
Route::post('/niobio/notas/get', 'NotasController@index');

// Obtendo Regras
Route::post('/niobio/rules/t2/get', 'NotasController@index');

// Registrando ou Atualizando regras
Route::post('niobio/rule/add/t2', 'RegrasController@store');

// Registrando regras encerradas (T3)
Route::post('niobio/rule/add/t3', 'NotasController@closeCalc');

// Obtendo Todas as Notificações
Route::get('niobio/feed/all', 'NotificationController@index');

// Obtendo Notificações novas ( não Lidas )
Route::get('niobio/feed/new', 'NotificationController@readedfeed');

// Marcando Notificação como Lida
Route::post('niobio/feed/att', 'NotificationController@turnreaded');

// Deletando Notificações
Route::delete('niobio/feed/del', 'NotificationController@deleteNotification');
