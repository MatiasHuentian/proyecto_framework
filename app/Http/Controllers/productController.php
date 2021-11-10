<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('pages.products.index');
    }

    public function edit(){
        return view('pages.products.edit');
    }

    public function create(){
        return view('pages.products.create');
    }
}
