<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;

class ProductController extends Controller
{
   
    public function getProducts()
    {
        $products = Product::all();

        return view('product::index',compact('products'));
    }

    
}
