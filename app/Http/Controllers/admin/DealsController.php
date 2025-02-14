<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    public function create()
    {
        return view('admin.deals.create');
    }

    public function edit()
    {
        return view('admin.deals.edit');
    }
}
