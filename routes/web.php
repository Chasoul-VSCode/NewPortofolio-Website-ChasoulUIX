<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('apps.app');
});

Route::get('/apps/app', function () {
    return view('apps.app');
});
