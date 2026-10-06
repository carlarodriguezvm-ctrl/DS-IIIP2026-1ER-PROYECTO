<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})-> name('welcome');

Route::get('/Products', function () {
    return view('Products');
})->name('Products');

Route::get('/Enlace', function () {
    return view('Enlace');
})-> name('Enlace');

Route::get('/Interfaz', function () {
    return view('Interfaz');
})-> name('Interfaz');

Route::get('/Flights', [FlightController::class, 'index'])->name('Flights.index');

Route::get('/Posts', [PostController::class, 'index'])->name('Posts.index');

