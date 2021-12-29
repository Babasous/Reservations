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
Route::get('/liste_artistes', [ArtistController::class, 'index'])->name('artist.index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])->where('id', '[0-9]+')->name('artist.show');
//Artiste: Formulaire
    //Modifier un artiste
Route::get('/artist/{id}/edit', [ArtistController::class, 'edit'])->where('id', '[0-9]+')->name('artist.edit');
Route::put('/artist/{id}', [ArtistController::class, 'update'])->where('id', '[0-9]+')->name('artist.update');
    //Ajouter un nouvel artiste
Route::get('/artist/create', [ArtistController::class, 'create'])->name('artist.create');
Route::post('/artist', [ArtistController::class, 'store'])->name('artist.store');
    //Supprimer un artiste
Route::delete('/artist/{id}', [ArtistController::class, 'destroy'])->where('id', '[0-9]+')->name('artist.destroy');


//Type
Route::get('/liste_types', [TypeController::class, 'index'])->name('type.index');
Route::get('/type/{id}', [TypeController::class, 'show'])->where('id', '[0-9]+')->name('type.show');
//Type: Formulaire
    //Modifier un type
Route::get('/type/{id}/edit', [TypeController::class, 'edit'])->where('id', '[0-9]+')->name('type.edit');
Route::put('/type/{id}', [TypeController::class, 'update'])->where('id', '[0-9]+')->name('type.update');
    //Ajouter un type
Route::get('/type/create', [TypeController::class, 'create'])->name('type.create');
Route::post('/type', [TypeController::class, 'store'])->name('type.store');
    //Supprimer  un type
Route::delete('/type/{id}', [TypeController::class, 'destroy'])->where('id', '[0-9]+')->name('type.destroy');

//Locality
Route::get('/liste_localities', [LocalityController::class, 'index'])->name('locality.index');
Route::get('/locality/{id}', [LocalityController::class, 'show'])->where('id', '[0-9]+')->name('locality.show');
//Locality: Formulaire
Route::get('/locality/{id}/edit', [LocalityController::class, 'edit'])->where('id', '[0-9]+')->name('locality.edit');
Route::put('/locality/{id}', [LocalityController::class, 'update'])->where('id', '[0-9]+')->name('locality.update');
Route::delete('/locality/{id}', [LocalityController::class, 'destroy'])->where('id', '[0-9]+')->name('locality.delete');

//Role
Route::get('/liste_roles', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/{id}', [RoleController::class, 'show'])->where('id', '[0-9]+')->name('role.show');
//Role: Formulaire
Route::get('/role/{id}/edit', [ROleController::class, 'edit'])->where('id', '[0-9]+')->name('role.edit');
Route::put('/role/{id}', [ROleController::class, 'update'])->where('id', '[0-9]+')->name('role.update');
Route::delete('/role/{id}', [ROleController::class, 'destroy'])->where('id', '[0-9]+')->name('role.delete');

//Location
Route::get('location', [LocationController::class, 'index'])->name('location.index');
Route::get('location/{id}', [LocationController::class, 'show'])->where('id', '[0-9]+')->name('location.show');

//Show
Route::get('/show', [ShowController::class, 'index'])->name('show.index');
Route::get('/show/{id}', [ShowController::class, 'show'])->where('id', '[0-9]+')->name('show.show');

//Representation
Route::get('/representation', [RepresentationController::class, 'index'])->name('representation.index');
Route::get('/representation/{id}', [RepresentationController::class, 'show'])->where('id', '[0-9]+')->name('representation.show');

