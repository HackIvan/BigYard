{{-- @extends('layouts.front') --}}
@extends('layouts.cart')

@section('cart-details')







            @section('cart-items')
                <div class="cart-main-area pb-100">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 class="cart-heading">Cart</h1>
                                @foreach ($cartItems as $item)
                                <form action="{{ route('cart.update', $item->id) }}">
                                    @endforeach
                                    <div class="table-content table-responsive">

                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>remove</th>
                                                    <th>images</th>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cartItems as $item)
                                                    <tr>
                                                        <td class="product-remove"><a
                                                                href="{{ route('cart.destroy', $item->id) }}"
                                                                class="text-dark"><i class="fa fa-trash"></i></a></td>
                                                        <td class="product-thumbnail">
                                                            <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                                        </td>
                                                        <td class="product-name"><a href="#">{{ $item->name }}</a></td>
                                                        <td class="product-price-cart"><span class="amount">Le {{ $item->price }}</span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <input class="col-xs-2" name="quantity" type="number"
                                                            value="{{ $item->quantity }}">
                                                        </td>
                                                        <td class="product-subtotal">Le {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="coupon-all">
                                                <div class="coupon">
                                                    <div class="cart-page-total">
                                                        <a href="/"><i class="fa fa-reply fa-2x"> Continue Shopping</i> </a>
                                                    </div>
                                                </div>
                                                <div class="coupon2">
                                                        <input class="button" name="apply_coupon" value="Update Cart"
                                                        type="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    <div class="row">
                                        <div class="col-md-7 ml-auto">
                                            <div class="cart-page-total">
                                                {{-- <a href="https://recentdst.com/zonal/"><i class="fa fa-reply"></i> </a> --}}
                                                <iframe class="responsive-iframe" src="https://recentdst.com/zonal/zonetwo.html" width="100%" height="400px" style="border:2px solid rgb(169, 178, 213);" title="Zonal Map">      </iframe>

                                            </div>
                                        </div>

                                        <div class="col-md-5 ml-auto">
                                            <div class="cart-page-total">
                                                <h2>Cart totals</h2>
                                                <ul>
                                                    {{-- <li>Subtotal </li> --}}
                                                    @foreach ($cartItems as $itemTotal)




                                                <li>{{$itemTotal->name}}<span>Le {{Cart::session(auth()->id())->get($itemTotal->id)->getPriceSum()}}</span></li>
                                                    @endforeach
                                                    <li>Total<span> Le
                                                        {{\Cart::session(auth()->id())->getTotal()}}
                                                </ul>
                                                <a style="text-decoration: none" href="cart/checkout"><i class="fa fa-share fa-2x"> Checkout</i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endsection

            <style>
                .proceed:hover {


                    text-align: center;
                    text-decoration: none;
                    color: green;
                }

                .proceed {
                    padding-left: 11;
                    padding-right: 11%;
                    padding-top: 10px;
                    float: left;
                    font-size: 20px;
                    color: blue;
                    text-decoration: none;

                }


                .continue:hover {


                    text-align: center;
                    text-decoration: none;
                    color: green;
                }

                .continue {
                    padding-left: 11;
                    padding-right: 11;
                    padding-top: 10px;
                    float: left;
                    font-size: 20px;
                    color: black;
                    text-decoration: none;
                }


                .cart-page-total{

                }

                 a{
                    text-decoration: none;
                }

               a :hover{
                    text-decoration: none;
                }
            </style>
        </div>




    @endsection

    @section('cart-details-3')
        {{-- <div class="cart_section"> --}}

            <style>
                .cart_item {
                    width: 100%;
                    padding: 15px;
                    padding-right: 46px
                }

                .cart_item_image {
                    width: 133px;
                    height: 133px;
                    float: left
                }

                .cart_item_image img {
                    max-width: 100%
                }

                .cart_item_info {
                    width: calc(100% - 133px);
                    float: left;
                    padding-top: 18px
                }

                .cart_item_name {
                    margin-left: 7.53%
                }

                .cart_item_title {
                    font-size: 14px;
                    font-weight: 400;
                    color: rgba(0, 0, 0, 0.5)
                }

                .cart_item_text {
                    font-size: 18px;
                    margin-top: 35px
                }

                .cart_item_text span {
                    display: inline-block;
                    width: 20px;
                    height: 20px;
                    border-radius: 50%;
                    margin-right: 11px;
                    -webkit-transform: translateY(4px);
                    -moz-transform: translateY(4px);
                    -ms-transform: translateY(4px);
                    -o-transform: translateY(4px);
                    transform: translateY(4px)
                }

                .cart_item_price {
                    text-align: right
                }

                .cart_item_total {
                    text-align: right
                }

                .order_total {
                    width: 100%;
                    height: 60px;
                    margin-top: 30px;
                    border: solid 1px #e8e8e8;
                    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
                    padding-right: 46px;
                    padding-left: 15px;
                    background-color: #fff
                }

                .order_total_title {
                    display: inline-block;
                    font-size: 14px;
                    color: rgba(0, 0, 0, 0.5);
                    line-height: 60px
                }

                .order_total_amount {
                    display: inline-block;
                    font-size: 18px;
                    font-weight: 500;
                    margin-left: 26px;
                    line-height: 60px
                }

                .cart_buttons {
                    margin-top: 60px;
                    text-align: right
                }

                .cart_button_clear {
                    display: inline-block;
                    border: none;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 48px;
                    color: rgba(0, 0, 0, 0.5);
                    background: #FFFFFF;
                    border: solid 1px #b2b2b2;
                    padding-left: 35px;
                    padding-right: 35px;
                    outline: none;
                    cursor: pointer;
                    margin-right: 26px
                }

                .cart_button_clear:hover {
                    border-color: #0e8ce4;
                    color: #0e8ce4
                }

                .cart_button_checkout {
                    display: inline-block;
                    border: none;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 48px;
                    color: #FFFFFF;
                    padding-left: 35px;
                    padding-right: 35px;
                    outline: none;
                    cursor: pointer;
                    vertical-align: top
                }

                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

            </style>
        </div>


    @endsection
