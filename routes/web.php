<?php

use App\Http\Controllers\PersonneController;
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

Route::controller(PersonneController::class)
->group(function(){

    Route::get('/','index');
    Route::get('/personne/create', 'create');
    Route::get('/personne/{id}', 'show');
    Route::get('/personne/{id}/edit', 'edit');
    
    
    Route::post('/personne','store');
    Route::patch('/personne/{id}','update');
    Route::delete('/contact/{id}', 'destroy');
});