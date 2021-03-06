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

Route::view('/places', 'places');

Route::view('/liste_utilisateur', 'liste_utilisateur');

Route::view('/liste_place', 'liste_place');

Route::view('/demande_placeutil', 'demande_placeutil');

?>