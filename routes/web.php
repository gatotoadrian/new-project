<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
// use Symfony\Component\HttpFoundation\Request;

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
Route::get('/post/{id}', function($id){
    // debugung helper methods
    // dd is die and dump -ddd is die dump and debug
    // ddd($id); 
    return response('post ' . $id);
})->where('id', '[0-9]+');

// you request the paramiter you want to run
Route::get('/search', function(Request $request){
    return $request ->name . ' '. $request->city;
});