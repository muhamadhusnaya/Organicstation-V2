<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brands()
    {
        return view('admin.Brand');
    }

    public function createBrand()
    {
        return view('admin.BrandResource.CreateBrand');
    }
}
