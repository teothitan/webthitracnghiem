<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Hello chào mừng đến Đề tài Thi trắc Nghiệm'
    ]);
});



