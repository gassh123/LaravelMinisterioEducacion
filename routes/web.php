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

Route::get('/', function () {
    return view('welcome');
})->name('main');

/*----------------------------------NOVEDADES---------------------------------------*/
/*GALERIA DE FOTOS DE NOVEDADES*/
route::get('/index','NoveltyController@index')->name('novelty.index');

/*GALERIA DE FOTOS DE NOVEDADES*/
route::get('/indexuser','NoveltyController@index')->name('novelty.index');

/*LISTADO DE FOTOS*/
route::get('index/modify','NoveltyController@modify')->name('novelty.modify');

/*INFORMACIÓN DE FOTOS*/
route::get('index/infonovelty','NoveltyController@infonovelty')->name('novelty.infonovelty');

/*AGREGAR NUEVA FOTO*/
route::get('modify/add','NoveltyController@add')->name('novelty.add');

/*FOTO AGREGADA CORRECTAMENTE*/
route::post('add/store','NoveltyController@store')->name('novelty.store');

/*EDITAR NOVEDAD*/
route::get('modify/edith/{id}','NoveltyController@edith')->name('novelty.edith');

/*ACTUALIZAR NOVEDAD*/
route::put('modify/edith/{id}','NoveltyController@update')->name('novelty.update');

/*ELIMINAR NOVEDAD*/
route::delete('modify/delete/{id}','NoveltyController@delete')->name('novelty.delete');

/*------------------------------------DECLARACIONES JURADAS-----------------------------*/

/*DECLARACION JURADA DE CARGO*/
route::get('/F2', 'DeclaracionJurada@vista');

/*VISTA ADMINISTRACION DE DOCUMENTOS*/
route::get('/administracion-documentos', 'AdministracionDocumentos@vista');
route::post('/agregarDocumento', 'AdministracionDocumentos@agregar');

/*--------------------------------LIQUIDACIONES----------------------------------------*/
route::get('/index','LiquidationController@index')->name('liquidation.index');
route::get('index/altaybaja','LiquidationController@altaybaja')->name('liquidation.altaybaja');
route::get('index/novedades','LiquidationController@novedades')->name('liquidation.novedades');
route::get('index/otrasnovedades','LiquidationController@otrasnovedades')->name('liquidation.otrasnovedades');
route::match(['put','patch'],'novelty/{novelty}','NoveltyController@update')->name('novelty.update');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


