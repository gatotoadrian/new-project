<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// this is how api is created 
// Route::get('/posts',function() {
//     return response()->json({
//         'posts'=>[
//             [
//               'title'=>'Post One '
//             ]
//         ]
//     });
// });

Route::middlewware('auth:sanctum')->get('/user',
    function (Request $reques) {
        return $request->user();
    
});
