<?php

use Illuminate\Support\Facades\Route;

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

