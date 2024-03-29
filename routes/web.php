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
// ROTAS DE USUARIOS
Route::get('/', "UserController@index")->name('index');
Route::post('/', "UserController@create")->name('create');
Route::post('/dashboard', "UserController@authenticate")->name('dashboard');
Route::get('/dashboard', "UserController@index")->name('index');
Route::get('/esqueciminhasenha', "UserController@resetpassword")->name('resetpassword');
Route::get('/dashboard/perfil', "UserController@perfil")->name('perfil');
Route::get('/dashboard/cadastravacina', "UserController@cadastravacina")->name('cadastravacina');
Route::get('/dashboard/consultarhistorico', "UserController@consultarhistorico")->name('consultarhistorico');

// ROTAS DE VACINAS
Route::get('dashboard/vacinas/cadastrar',    "VacinaController@index")->name('cadastrarvacina');
Route::post('dashboard/vacinas/cadastrar',   "VacinaController@store")->name('user.cadastrarvacina');

// ROTAS DE CARTAO
Route::get('dashboard/cartao/emitir',        "CartaoController@index")->name('emitircartao');
Route::get('dashboard/cartao/emitir/relatorio',        "CartaoController@create")->name('relatorio');
Route::post('dashboard/cartao/emitir/relatorio',        "CartaoController@store")->name('cartao.emitircartao');






// ROTAS QRCODE


Route::get('dashboard/cartao/emitir/relatorio/qrcode', function(){
  return QrCode :: size (300) -> generate ('https://drive.google.com/open?id=1aMYkyrs_IFhsIXMjWOeQndaqVC1XXeYf');})->name('qrcode');


  