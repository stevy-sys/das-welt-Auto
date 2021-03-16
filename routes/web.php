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

Route::get('/', 'CouvertureController@index')->name('couverture');
Route::get('/accueil', 'AccueilController@index')->name('home');
Route::get('/recherche/{recherche}', 'RechercheController@rechercheCategorie')->name('recherche.categorie');
Route::resource('voiture', 'VoitureController');
Route::get('/contact', 'ContactController@index')->name('contact');
//Route::ressources('/categorie', 'CategorieController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');