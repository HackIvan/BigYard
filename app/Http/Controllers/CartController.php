<?php

namespace App\Http\Controllers;

use App\Recent;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product, Recent $recent)
    {



        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'description' => $product->description,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }


    public function index (){


       $cartItems = \Cart::session(auth()->id())->getContent();

        return view ('cart.index', compact('cartItems'));
    }


    public function destroy ($itemId){


   \Cart::session(auth()->id())->remove($itemId);

         return back();
     }

     public function update ($rowId)
     {
        \Cart::session(auth()->id())->update($rowId,[
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            ),

        ]);
        return back ();

     }

     public function  checkout ()
     {
         return view('cart.checkout');

     }


}
