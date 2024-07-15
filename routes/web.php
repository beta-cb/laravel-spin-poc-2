<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    console.log("Dummy change, removed env from github secrets");
    return response('SERVICE_IS_HEALTHY', 200);
});
