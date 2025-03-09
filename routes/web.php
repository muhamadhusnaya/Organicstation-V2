<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/Login', function () {
//     return view('admin.Login');
// });
// Route::get('/admin/dashboard', function () {
//     return view('admin.Dashboard');
// });

// Route::get('/admin/brand', function () {
//     return view('admin.Brand');
// });
// Route::get('/admin/brand-create', function () {
//     return view('admin.BrandResource.CreateBrand');
// });

// Route::get('/admin/category', function () {
//     return view('admin.Category');
// });
// Route::get('/admin/category-create', function () {
//     return view('admin.CategoryResource.CreateCategory');
// });
// Route::get('/admin/category-edit', function () {
//     return view('admin.CategoryResource.CreateCategory');
// });
// Route::get('/admin/product', function () {
//     return view('admin.Product');
// });
// Route::get('/admin/product-create', function () {
//     return view('admin.ProductResource.CreateProduct');
// });
// Route::get('/admin/orders', function () {
//     return view('admin.Order');
// });
// Route::get('/admin/users', function () {
//     return view('admin.User');
// });
// Route::get('/admin/users-create', function () {
//     return view('admin.UsersResource.CreateUser');
// });

// Route Login Admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    Route::get('/admin/category', [CategoryController::class, 'showCategory'])->name('admin.category');
    Route::post('/admin/category-create', [CategoryController::class, 'createCategory'])->name('admin.category.create');
    Route::post('/admin/category-edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.category.edit');
    Route::get('/admin/brand', [BrandController::class, 'brands'])->name('admin.brand');
    Route::get('/admin/brand-create', [BrandController::class, 'createBrand'])->name('admin.brand.create');
});


// Route User
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');