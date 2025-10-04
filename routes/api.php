<?php

use Illuminate\Support\Facades\Route;

Route::post('/test', function () {
    return response()->json(['message' => 'API working!']);
});
