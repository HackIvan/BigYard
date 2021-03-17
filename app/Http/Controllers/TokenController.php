<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;

class TokenController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

    // $orders = Order::take(1)->get()->orderBy('desc', true);
    // $orders = $orders->reverse();
    // return view('token', ['recentOrders' => $orders]);



    //working

    // $users = User::take(8)->get();
    $orders = Order::take(10)
    ->orderBy('created_at', 'desc')
    ->get();
    $myToken = $orders->sortByDesc('name');
    return view('token', ['recentOrders' => $orders]);






        // $orders = Order::take(1)->get();

        // return view('token');
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

    // public function africell()
    // {
    //     dd('Africell SL')
    // }




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
            'buyer_fullname' => 'required',
            'buyer_address' => 'required',
            'buyer_phone' => 'required',
            'payment_method' => 'required',


        ]);

         $order = new Order();

         $order->order_number = uniqid('orderNumber-');

        $order->buyer_fullname = $request->input('buyer_fullname');
        $order->buyer_address = $request->input('buyer_address');
        $order->buyer_phone = $request->input('buyer_phone');


        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('buyer_fullname');
            $order->billing_address = $request->input('buyer_address');
            $order->billing_phone = $request->input('buyer_phone');
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
        return redirect()->to('africell');
         //empty the cart

    }
    elseif(request('payment_method') == 'orange_money'){
        \Cart::session(auth()->id())->clear();
        return redirect()->to('orange');
         //empty the cart

    }
    elseif (request('payment_method') == 'cash_on_delivery') {
        \Cart::session(auth()->id())->clear();
        return redirect()->to('token');
    }


        // take user to thank you page
        return "order completed, thank you very much!";
        // dd('order created', $order);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {

    }


    public function orange()
    {
        return view('layouts.orange');
    }
    public function africell()
    {
        return view('layouts.africell');
    }

    public function paymentpal()
    {
      return view('layouts.paymentpal');
    }

    public function successredirect()
    {
      return view('layouts.successredirect');
    }
}

