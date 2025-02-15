<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderPaid;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{

    public function getExpressCheckout()
    {
        $cart = \Cart::session(auth()->id());

        $cartItems = array_map(function ($item) use($cart) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']

            ];
        }, $cart->getContent()->toarray());


        $checkoutData = [
            'items' => $cartItems,
            'return_url' => route('paypal.success'),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid(),
            'invoice_description' => " Order description ",
            'total' => $cart->getTotal(),
            // 'shipping_discount' => $cart->getSubTotal() - $cart->getTotal()

        ];

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);

        // paypal_link = 'https://google.com';

        // $checkoutData = $this->checkoutData();


    }

    // private function checkoutData($orderId)
    // {






    //     return $checkoutData;
    // }

    public function cancelPage()
    {
        dd('payment failed');


    }
    public function PaySuccess()
    {
            return view ('layouts.paymentpal');
    }

    public function SuccessRedirect()
    {
            return view ('layouts.successredirect');
    }

    // public function getExpressCheckoutSuccess(Request $request, $orderId)
    // {

    //     $token = $request->get('token');
    //     $payerId = $request->get('PayerID');
    //     $provider = new ExpressCheckout();
    //     $checkoutData = $this->checkoutData($orderId);

    //     $response = $provider->getExpressCheckoutDetails($token);

    //     if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            // Perform transaction on PayPal
            // $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            // $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            // if(in_array($status, ['Completed','Processed'])) {
            //     $order = Order::find($orderId);
            //     $order->is_paid = 1;
            //     $order->save();

                //send mail

    //             Mail::to($order->user->email)->send(new OrderPaid($order));


    //             return redirect()->route('home')->withMessage('Payment successful!');
    //         }

    //     }

    //     return redirect()->route('home')->withError('Payment UnSuccessful! Something went wrong!');


    // }
}
