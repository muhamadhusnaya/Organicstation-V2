<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function () {
    return view('admin.Dashboard');
});

Route::get('/admin/brand', function () {
    return view('admin.Brand');
});
Route::get('/admin/brand-create', function () {
    return view('admin.BrandResource.CreateBrand');
});

Route::get('/admin/category', function () {
    return view('admin.Category');
});
Route::get('/admin/category-create', function () {
    return view('admin.CategoryResource.CreateCategory');
});
Route::get('/admin/category-edit', function () {
    return view('admin.CategoryResource.CreateCategory');
});
Route::get('/admin/product', function () {
    return view('admin.Product');
});
Route::get('/admin/product-create', function () {
    return view('admin.ProductResource.CreateProduct');
});
Route::get('/admin/orders', function () {
    return view('admin.Order');
});
Route::get('/admin/users', function () {
    return view('admin.User');
});
Route::get('/admin/users-create', function () {
    return view('admin.UsersResource.CreateUser');
});