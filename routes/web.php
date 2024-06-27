<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// GET , POST, PUT, PATCH, DELETE (
Route::get('test', function () {
    echo '123';
});
Route::get('/', function () {
    echo 'Trang chủ';
});
Route::get('list-products', [ProductController::class, 'showProduct']);

// SLug
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

// Params
Route::get('update-product', [ProductController::class, 'updateProduct']);
Route::get('thongtinsv', [StudentController::class, 'listStudents']);
