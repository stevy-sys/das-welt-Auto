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

Route::get('/', 'IndexController@couverture')->name('couverture');
Route::get('/accueil', 'IndexController@accueil')->name('home');
Route::get('/produit', 'IndexController@produit')->name('produit');
Route::get('/produit/{produit}', 'IndexController@showProduit')->name('produit.show');
Route::post('/produit/{produit}/commentaire', 'IndexController@commenter')->name('commentaire.store');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/recherche/{recherche}', 'IndexController@rechercheCategorie')->name('recherche.categorie');





//Route::resource('produit', 'VoitureController');


//Route::post('/comentaire', 'CommentaireController@store')->name('commentaire.store');
//Route::ressources('/categorie', 'CategorieController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');
Route::get('/home/message', 'HomeController@message')->name('message.user');
Route::get('/home/favoris', 'HomeController@favoris')->name('favoris.user');
Route::get('/home/commentaire', 'HomeController@commentaire')->name('commentaire.user');


/**admin route */

route::namespace('Admin')->group(function (){
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    //////
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
    Route::resource('/admin/voiture', 'VoitureController');
    Route::resource('/admin/message', 'MessageController');
    //Route::resource('/admin/adala', 'AdalaController');
    //////
});