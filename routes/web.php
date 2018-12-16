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


Route::get('/persons','Persons\PersonsController@index')->name('indexPersons');

Auth::routes();

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');


//Rutas del crud de afiliados
Route::resource('afilliate', 'Persons\AfilliateController');

Route::get('/afilliate/{afilliate}/delete', 'Persons\AfilliateController@delete');
Route::get('/afilliate/{afilliate}/curriculum', 'Persons\AfilliateController@curriculum')->name('afilliate.curriculum');
Route::get('/afilliate/{afilliate}/download', 'Persons\AfilliateController@downloadCurriculum')->name('afilliate.downloadCurriculum');
Route::patch('/afilliate/{afilliate}/updateFile', 'Persons\AfilliateController@updateFile')->name('afilliate.updateFile');
Route::get('/afilliate/{afilliate}/existCurriculum', 'Persons\AfilliateController@existCurriculum')->name('afilliate.existCurriculum');
