<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return __METHOD__;
    }

    public function show($id)
    {
        return 'Product Id= '.$id;
    }
}
