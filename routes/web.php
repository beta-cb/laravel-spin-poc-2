<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    console.log("Dummy change, after changing ENV");
    return response('SERVICE_IS_HEALTHY', 200);
});
