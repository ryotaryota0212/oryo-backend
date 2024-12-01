<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// シンプルなAPIルート
Route::get('/api/v1/users', function () {
    return response()->json(['message' => 'Hello, API!']);
});
