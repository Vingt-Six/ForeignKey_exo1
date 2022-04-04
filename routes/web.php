<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use App\Models\Car;
use App\Models\Color;
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
    $colors = Color::all();
    $cars = Car::all();
    return view('welcome', compact('colors', 'cars'));
});

Route::get('/hometwo', function(){
    $colors = Color::all();
    $cars = Car::all();
    return view('pages.sectionhome', compact('colors', 'cars'));
});

Route::resource('cars', CarController::class);
Route::resource('colors', ColorController::class);