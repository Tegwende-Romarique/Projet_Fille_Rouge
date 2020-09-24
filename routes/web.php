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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Les controllers des etablissements
Route::get('formulaire-Etablissement', 'EtablissementController@create');
Route::post('creer-Etablissement', 'EtablissementController@store');
Route::get('afficher-Etablissement', 'EtablissementController@index');
Route::get('supprimer-Etablissement', 'EtablissementController@destroy');
Route::get('editer-Etablissement/{id}', 'EtablissementController@edit');
Route::post('update-Etablissement/{id}', 'EtablissementController@update');

