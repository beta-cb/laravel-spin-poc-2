<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    // console.log("Dummy change, changed session driver to cookie in env");
    return response('SERVICE_IS_HEALTHY', 200);
});
