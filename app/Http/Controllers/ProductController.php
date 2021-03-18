<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function ProductCategory()
    {
        return view('web.product_category');
    }
    public function Product()
    {
        return view('web.product');
    }
    public function ProductDetail()
    {
        return view('web.product_detail');
    }
}
