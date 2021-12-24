<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RepresentationController;

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
})->name('home_page');

//Artiste
Route::get('/liste_artistes', [ArtistController::class, 'index'])->name('artist_index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])->where('id', '[0-9]+')->name('artist_show');
//Artiste: Formulairelse
Route::get('/artist/edit/{id}', [ArtistController::class, 'edit'])->where('id', '[0-9]+')->name('artist_edit');
Route::put('/artist/{id}', [ArtistController::class, 'update'])->where('id', '[0-9]+')->name('artist_update');


//Type
Route::get('/liste_types', [TypeController::class, 'index'])->name('type_index');
Route::get('/type/{id}', [TypeController::class, 'show'])->where('id', '[0-9]+')->name('type_show');
//Type: Formulairelse
Route::get('/type/edit/{id}', [TypeController::class, 'edit'])->where('id', '[0-9]+')->name('type_edit');
Route::put('/type/{id}', [TypeController::class, 'update'])->where('id', '[0-9]+')->name('type_update');

//Locality
Route::get('/liste_localities', [LocalityController::class, 'index'])->name('locality_index');
Route::get('/locality/{id}', [LocalityController::class, 'show'])->where('id', '[0-9]+')->name('locality_show');
//Locality: Formulairelse
Route::get('/locality/edit/{id}', [LocalityController::class, 'edit'])->where('id', '[0-9]+')->name('locality_edit');
Route::put('/locality/{id}', [LocalityController::class, 'update'])->where('id', '[0-9]+')->name('locality_update');

//Role
Route::get('/liste_roles', [RoleController::class, 'index'])->name('role_index');
Route::get('/role/{id}', [RoleController::class, 'show'])->where('id', '[0-9]+')->name('role_show');

//Location
Route::get('location', [LocationController::class, 'index'])->name('location_index');
Route::get('location/{id}', [LocationController::class, 'show'])->where('id', '[0-9]+')->name('location_show');

//Show
Route::get('/show', [ShowController::class, 'index'])->name('show_index');
Route::get('/show/{id}', [ShowController::class, 'show'])->where('id', '[0-9]+')->name('show_show');

//Representation
Route::get('/representation', [RepresentationController::class, 'index'])->name('representation_index');
Route::get('/representation/{id}', [RepresentationController::class, 'show'])->where('id', '[0-9]+')->name('representation_show');

