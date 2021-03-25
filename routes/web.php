<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\login;
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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/', function () {
    return view('index');
});
Route::get('reservation', function () {
    return view('reservation');
});

Route::get('apprenant', function () {
    return view('apprenant');
});


//Route::get('/', [leila::class, 'index']);
Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);
Route::get('admin', [UsersController::class, 'admin']);

Route::get('login', [login::class, 'envoyer']);
Route::post('login', [login::class, 'authenticate']);

