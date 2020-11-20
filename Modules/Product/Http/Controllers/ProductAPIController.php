<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;


class ProductAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function getProducts()
    {
        $products = Product::all();

        return response()->json(['products' => $products]);
    }

    
}
