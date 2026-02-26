<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return response('<h1>Hellow 25655World</h1>', 200)
    ->header('content-Type', 'text/plain')
    // custo heaeder value
    ->header('foo', 'bar');
});


// wildcard


