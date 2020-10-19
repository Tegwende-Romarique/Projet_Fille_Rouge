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
Route::get('info-Etablissement','EtablissementController@affiche');
Route::get('formulaire-Etablissement','EtablissementController@create');
Route::post('creer-Etablissement','EtablissementController@store');
Route::get('liste-etablissement','EtablissementController@index');
Route::get('supprimer-Etablissement','EtablissementController@destroy');
Route::get('editer-Etablissement/{id}','EtablissementController@edit');
Route::post('update-Etablissement/{id}','EtablissementController@update');
Route::get('detaille-Etablissement','EtablissementController@show');


// Les controllers des actualites d'un etablissement
Route::get('liste-actualite','ActualitesController@index');
Route::get('formulaire-actualite','ActualitesController@create');
Route::post('ajouter-actualite','ActualitesController@store');



// Les controllers des offres d'un etablissement
Route::get('liste-offre','OffresController@index');
Route::get('formulaire-offre','OffresController@create');
Route::post('ajouter-offre','OffresController@store');
Route::get('modifier-offre/{id}','OffresController@edit');
Route::post('update-offre/{id}','OffresController@update');
Route::get('supprimer-offre','OffresController@destroy');



// Les controllers des postes d'un etablissement
Route::get('liste-poste','PostesController@index');
Route::get('formulaire-poste','PostesController@create');
Route::post('ajouter-poste','PostesController@store');
Route::get('modifier-poste/{id}','PostesController@edit');
Route::post('update-poste/{id}','PostesController@update');
Route::get('supprimer-poste','PostesController@destroy');
Route::put('/article/{post}/publish', 'PostesController@publish')->middleware('auth');



// Les controllers des Evenements d'un etablissement
Route::get('liste-evenement','EvenementsController@index');
Route::get('formulaire-evenement','EvenementsController@create');
Route::post('ajouter-evenement','EvenementsController@store');
Route::get('modifier-evenement/{id}','EvenementsController@edit');
Route::post('update-evenement/{id}','EvenementsController@update');
Route::get('supprimer-evenement','EvenementsController@destroy');

// Les controllers des photos d'un etablissement
Route::get('liste-photo','PhotosController@index');
Route::get('formulaire-Photo','PhotosController@create');
Route::post('ajouter-Photo','PhotosController@store');
Route::get('modifier-Photo/{id}','PhotosController@edit');
Route::post('update-Photo/{id}','PhotosController@update');
Route::get('supprimer-Photo','PhotosController@destroy');


