<?php

use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\OuvrageController;
use App\Http\Controllers\ExemplaireController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route Lina start
Route::get('/emprunts', [EmpruntController::class, 'show']);
//Route Lina end
//Route mamoudou
Route::resource('/ouvrage', OuvrageController::class);
Route::get('/searchOuvrage', [App\Http\Controllers\OuvrageController::class, 'getByKeywords']);
//Route mamoudou


// debut route wahib
Route::get('listerParAuteur/{auteur}', [OuvrageController::class, 'listerParAuteur']);

// fin route wahib


#Route idris
//Route::resource('/exemplaire',ExemplaireController::class);
Route::get('/exemplaire/{id}',[ExemplaireController::class, 'exemplaireOuvrage']);

// Route::get('/exemplaire',[App\Http\Controllers\ExemplaireController::class,'LesExemplaires']);
#Route idris
