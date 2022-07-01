<?php

use App\Http\Controllers\Controller;
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


Route::get('/logging-all', [Controller::class, 'testLogging'])->middleware('logApi');

Route::get('/logging-case1/{id}', [Controller::class, 'case1']);

Route::get('/logging-case2/{id}', [Controller::class, 'case2']);

Route::get('/logging-case3/{id}', [Controller::class, 'finalCase']);



