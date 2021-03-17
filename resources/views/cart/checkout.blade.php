@extends('layouts.front')
{{-- @extends('layouts.themecheckout') --}}
{{-- @extends('cart.index') --}}




@section('content')

    <div class="container mb-40">
        <div class="row">
            <div class="col-md-6">

                <h2>Checkout  Information</h2>



                <form action="{{ route('orders.store') }}" method="post">
                    @csrf
                    <div class=" form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="shipping_fullname" id="" class="form-control">


                    </div>

                    <div class="  form-group">
                        <label for="">Address</label>
                        <input type="text" name="shipping_address" id="" class="form-control">
                    </div>

                    {{-- <div class="  form-group">
                        <label for=""> Buyer City</label>
                        <input type="text" name="shipping_address" id="" class="form-control">
                    </div> --}}

                    <div class=" form-group">
                        <label for="">Mobile</label>
                        <input type="text" name="shipping_phone" id="" class="form-control">
                    </div>

                    <h4 class="pl-20">Payment options</h4>
                    <div class="col-md-6 select-dropdown">
                        <select>
                            <option class="form-check" name="pickup" value="no">No Pickup </option>
                            <option name="pickup" value="zone_one">Zone One</option>
                            <option name="pickup" value="zone_two">Zone Two</option>
                            <option name="pickup" value="orange_money">Zone Three</option>
                            <option name="pickup" value="afri_money">Zone Four</option>
                            <option name="pickup" value="afri_money">Zone Five</option>
                        </select>
                    </div>

                    <div class="row pl-20 pt-40 pb-40">
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="payment_method" type="radio" value="paypal" id="paypal"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="payment_method" type="radio" value="cash_on_delivery" id="cash_on_delivery"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="cash_on_delivery">Cash</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="payment_method" type="radio" id="afri_money" class="custom-control-input">
                                <label class="custom-control-label" for="afri_money">Africell Money</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="payment_method" type="radio" id="orange_money" class="custom-control-input">
                                <label class="custom-control-label" for="orange_money">Orange Money</label>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary mt-3 ml-20">Place Order</button>

                    <div class="d-flex justify-content-between footer p-3"><span>
                            <div class="col-lg-6 col-md-6">
                                <div class="payment-img">
                                    <h4>Payment Methods </h4> <a href="https://orange.sl"><img style="width: 25%"
                                            src="https://download.logo.wine/logo/Orange_Money/Orange_Money-Logo.wine.png"
                                            alt=""></a> <a href="https://africell.sl"><img style="width: 20%"
                                            src="https://www.nightwatchsl.com/wp-content/uploads/2020/04/AFR-600x197.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                        </span>
                    </div>


                </form>
            </div>
            <div class="col-md-6">
                {{-- <div class="col-md-7 ml-auto"> --}}
                    <h2>Zonal Mapping Information</h2>
                        {{-- <a href="https://recentdst.com/zonal/"><i class="fa fa-reply"></i> </a> --}}
                        <iframe class="responsive-iframe" src="https://recentdst.com/zonal/zonetwo.html" width="100%" height="500px" style="border:2px solid rgb(169, 178, 213);" title="Zonal Map">      </iframe>


                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection
