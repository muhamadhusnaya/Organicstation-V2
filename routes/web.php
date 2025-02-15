<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function () {
    return view('admin.Dashboard');
});
Route::get('/admin/category', function () {
    return view('admin.Category');
});
Route::get('/admin/category-create', function () {
    return view('admin.CategoryResouce.CreateCategory');
});
Route::get('/admin/category-edit', function () {
    return view('admin.CategoryResouce.CreateCategory');
});
Route::get('/admin/product', function () {
    return view('admin.Product');
});
Route::get('/admin/product-create', function () {
    return view('admin.ProductResouce.CreateProduct');
});
Route::get('/admin/orders', function () {
    return view('admin.Order');
});