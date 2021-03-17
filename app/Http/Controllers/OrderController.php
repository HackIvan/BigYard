<?php

namespace App\Http\Controllers;

use App\order;
use App\Recent;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $product = Product::take(20)->get();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',

        ]);

         $order = new Order();

         $order->order_number = uniqid('orderNumber-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');

        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
        }



        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();

        $order->save();


        //saving the ordered items

        $cartItems = \Cart::session(auth()->id())->getContent();


        foreach($cartItems as $item ){
            $order->items()->attach($item->id, ['price'=>$item->price, 'quantity'=> $item->quantity ]);
        }

        if(request('payment_method') == 'paypal'){
            \Cart::session(auth()->id())->clear();
            return redirect()->to('paymentpal');
        }



        elseif(request('payment_method') == 'afri_money'){
            \Cart::session(auth()->id())->clear();
            return redirect()->to('https://africell.sl/');
             //empty the cart

        }
        elseif (request('payment_method') == 'orange_money') {
            \Cart::session(auth()->id())->clear();
            return redirect()->to('https://orange.sl');
        }

        elseif (request('payment_method') == 'cash_on_delivery') {
            \Cart::session(auth()->id())->clear();
            return redirect()->to('token');
        }


        //empty the cart
        \Cart::session(auth()->id())->clear();
        // send email


        // take user to thank you page
        // return "order completed, thank you very much!";
        // dd('order created', $order);

        $product = Product::take(20)->get();
        $recents = Recent::take(3)->get();
        return view (
            'ordersuccess', ['allProducts' => $product], ['allRecents' => $recents]);

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }


    // public function store(Request $request)
    // {
    //     dd($request->all());
    // }
}
