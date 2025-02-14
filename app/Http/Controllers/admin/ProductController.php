<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.product.create');
    }

    public function edit()
    {
        return view('admin.product.edit');
    }

    public function CreateVaration()
    {
        return view('admin.product-varation.create');
    }

    public function EditVaration()
    {
        return view('admin.product-varation.edit');
    }
}
