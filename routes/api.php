<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello chào mừng đến Đề tài Thi trắc Nghiệm'
    ]);
});
