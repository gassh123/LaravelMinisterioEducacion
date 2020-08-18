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

route::get('/index','NoveltyController@index')->name('novelty.index');


route::get('novelty/create','NoveltyController@create')->name('novelty.create');

route::post('novelty','NoveltyController@store')->name('novelty.store');

route::get('novelty/{novelty}/edith','NoveltyController@edith')->name('novelty.edit');

route::match(['put','patch'],'novelty/{novelty}','NoveltyController@update')->name('novelty.update');

route::delete('novelty/{novelty]','NoveltyController@destroy')->name('novelty.destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


