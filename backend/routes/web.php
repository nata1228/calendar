<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function() {
//     return view('test');
// });