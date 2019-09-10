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
route::get('/home', 'IndexController@index');
route::get('/contato', 'ContatoController@index');
route::get('/produto', 'produtoController@produto');
route::get('/Institucional', 'InstitucionalController@Institucional');
route::get('/ClienteForm', 'ClienteFormController@ClienteForm');
route::get('/CategoriaForm', 'CategoriaFormController@CategoriaForm');
route::get('/ProdutoForm', 'ProdutoFormController@ProdutoForm');

route::resource('categoria', 'CategoriaController');