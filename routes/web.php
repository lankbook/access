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
Route::post('/welcome', function() {
  $utilisateur = new App\utilisateur_model;
  // $utilisateur->nom = request('nom');
  // $utilisateur->prenom = request('prenom');
  $utilisateur->email = request('email');
  $utilisateur->pass1 = request('pass1');
  $utilisateur->pass2 = request('pass2');

  $utilisateur->save();

  return 'bravo';

});
