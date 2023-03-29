<?php

use App\Http\Livewire\Edit;
use App\Http\Livewire\Show;
use App\Http\Livewire\Create;
use App\Http\Livewire\SingleCar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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
Route::get('edit/{param}',Edit::class);
Route::get('/create',Create::class);
Route::get('/show',Show::class);
Route::resource('/car', CarController::class);
