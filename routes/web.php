<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //dd('keesiii');
    return view('figma');
});

Route::get('/purchase', function () {
    //dd('keesiii');
    return view('purchase');
});
