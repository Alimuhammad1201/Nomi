<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function edit()
    {
        return view('admin.category.edit');
    }
}
