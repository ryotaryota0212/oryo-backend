<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/users', function () {
    return response()->json(['data' => 'こんにちわ！こんにちわ！！API連携成功！！！']);
});
