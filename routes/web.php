<?php

use App\Http\Controllers\ArtistController;
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
})->name('home_page');

//Artiste
Route::get('/liste_artistes', [ArtistController::class, 'index'])->name('artist_index');

// Route::get('/artist/{id}', [ArtistController::class, 'show'])->where('id','[0-10]+')->name('artist_show');
Route::get('/artist/{id}', [ArtistController::class, 'show'])->name('artist_show');

//Type
Route::get('/liste_types', [TypeController::class, 'index'])->name('type_index');
