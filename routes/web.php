<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PersonController;

Route::get('hello', [HelloController::class, "index"]);
Route::post('hello', [HelloController::class, "post"]);
Route::get('person', [PersonController::class, "index"]);
Route::get('person/add', [PersonController::class, "add"]);
Route::post('person/add', [PersonController::class, "create"]);