<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

// Route::get('/contact','ContactController@show');
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'create']);
// Route::view('/contact', 'form_contact');
// Route::get('/contact', 'ContactController@index');
