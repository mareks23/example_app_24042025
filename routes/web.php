<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     // return view('welcome');
// });

// Route::get('/test', function () {
//     echo "<h1>test</h1>";
//     $name = "Mareks";
//     echo $name;
// });

Route::get('/test', function () {
    return view('test', ['variable' => "my variable text value"]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/post', function () {
    return view('post');
});