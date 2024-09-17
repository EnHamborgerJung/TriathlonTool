<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'message' => 'Hello from Inertia.js with Vue 3 and Vite',
    ]);
});
