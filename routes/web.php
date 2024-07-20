<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Greenday');
});

Route::get('/Playlist', function () {
    return view('Playlist');
});
