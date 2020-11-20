<?php

namespace Modules\Cart\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;

class CartController extends Controller
{
    
    public function cartData()
    {
        $items = \Cart::getContent();
        // dd($items);

        return view('cart::index',compact('items'));
        
    }

    
    public function addToCart($id)
    {
        $product = Product::find($id); 
        
        \Cart::add([
        
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'associatedModel' => $product
         ]);

        return redirect('/products')->with('success','added to cart');

        
    }

    public function editCart($id)
    {
        
        return view('cart::edit',compact('id'));
    }

    
    public function updateCart($id , Request $request)
    {
        \Cart::update($id,[

            'quantity' => $request->quantity,
            
        ]);
        
        return redirect('/cart')->with('success','updated !');
        
    }

    
    public function deleteFromCart($id)
    {
        \Cart::remove($id);

        return redirect('/cart')->with('success','Deleted !');
    }

    
}
