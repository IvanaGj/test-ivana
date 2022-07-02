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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

//Races
Route::get('/races', [App\Http\Controllers\RacesController::class, 'index'])
    ->name('races.index');
Route::get('/races/create', [App\Http\Controllers\RacesController::class, 'create'])
    ->name('races.create');
Route::post('/races/', [App\Http\Controllers\RacesController::class, 'store'])
    ->name('races.store');

//Results

Route::get('/results/create/{race_id}', [App\Http\Controllers\ResultsController::class, 'create'])
    ->middleware('auth')
    ->name('results.create');
Route::post('/results/store/{race_id}', [App\Http\Controllers\ResultsController::class, 'uploadRaces'])
    ->middleware('auth')
    ->name('results.store');
Route::get('/results/{id}', [App\Http\Controllers\ResultsController::class, 'index'])
    ->middleware('auth')
    ->name('results.index');
Route::get('/results/edit/{id}', [App\Http\Controllers\ResultsController::class, 'edit'])
    ->middleware('auth')
    ->name('results.edit');
Route::get('/results/delete/{id}', [App\Http\Controllers\ResultsController::class, 'delete'])
    ->middleware('auth')
    ->name('results.delete');
Route::post('/results/update/{id}', [App\Http\Controllers\ResultsController::class, 'update'])
    ->middleware('auth')
    ->name('results.update');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');




