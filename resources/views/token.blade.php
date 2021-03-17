@extends('layouts.front')


@section('token')
    @foreach ($recentOrders as $token)
        {{-- <h3>Hello, {{ Auth::user()->name }} </h3> --}}
        @if (Auth::user()->id == $token->user_id)






            <!-- blog area end -->
            <div class="container">
                <div class="row">



                    <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                        <div class="row">
                            <div class="receipt-header">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="receipt-left">
                                        <img class="img-responsive" alt="bigyardlogo" src="/logo.png"
                                            style="width: 100px; border-radius: 43px;">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 ">

                                    <div style="float:right" class="col-xs-6 col-sm-6 col-md-6 text-right">
                                        <div class="receipt-right">

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="receipt-header receipt-header-mid">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <a href="http://bigyard.ipamusl.com">
                                            <h5>Big Yard</h5>
                                        </a>
                                        <h6><strong>Sierra Leone</strong></h6>
                                        <p>+23230009366 <i class="fa fa-phone"></i></p>
                                        <p>info@bigyard.ipamusl.com<i class="fa fa-envelope"></i></p>

                                        <p>Sierra Leone <i class="fa fa-location-arrow"></i></p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <table class="table table-bordered">
                                <h3>Reciept</h3>
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-md-6"><strong> Name</strong></td>
                                        <td class="col-md-6"><i class="fa fa-inr"></i><strong>
                                                {{ $token->billing_fullname }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-6"><strong> Address</strong></td>
                                        <td class="col-md-6"><i class="fa fa-inr"></i><strong>
                                                {{ $token->billing_address }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-6"><strong> Order Number</strong></td>
                                        <td class="col-md-6"><i class="fa fa-inr"></i>
                                            <strong>{{ $token->order_number }}</strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-6"><strong> Order Status</strong></td>
                                        <td class="col-md-6"><i class="fa fa-inr"></i><strong>
                                                {{ $token->status }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-6"><strong> Phone</strong></td>
                                        <td class="col-md-6"><i class="fa fa-inr"></i><strong>
                                                {{ $token->billing_phone }}</strong></td>
                                    </tr>



                                    <tr>
                                        <td class="">
                                            <h2><strong>Total: </strong></h2>
                                        </td>
                                        <td class="text-left text-danger">
                                            <h2><strong><i class="fa fa-inr"></i> Le {{ $token->grand_total }}</strong>
                                            </h2>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="receipt-header receipt-header-mid receipt-footer">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">


                                        <p><b>Order Date : </b>{{ $token->created_at }}</p>
                                        <h5 class="font-weight-bold">Thanks for odering!</h5>
                                        <p class="font-weight-bold mb-0">Big Yard Team</p>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <h1 style="text-align: left">You will be notified shortly, once your order has
                                            been processed</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @elseif  (Auth::user()->id != $token->user_id)


            <div class="container">

                    <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">


                        <div class="row">
                            <div class="col-lg-12">

                            </div>
                            <div class="receipt-header receipt-header-mid">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <a href="http://bigyard.ipamusl.com">
                                            <h5>Big Yard</h5>
                                        </a>
                                        <h6><strong>Sierra Leone</strong></h6>
                                        <p>+23230009366 <i class="fa fa-phone"></i></p>
                                        <p>info@bigyard.ipamusl.com<i class="fa fa-envelope"></i></p>

                                        <p>Sierra Leone <i class="fa fa-location-arrow"></i></p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th> <strong><h3>No Orders yet!</h3></strong></th>
                                        <th><h3 style="float:right; text-decoration:none;"><strong><a href="http://shops/create">Sell on BigYard!</a></strong></h3>
                                        </th>
                                    </tr>
                                </thead>

                            </table>
                        </div>




                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <h6 class="font-weight-bold">Thanks for checking in, Truely Sierra Leonean...</h6>
                        <p class="font-weight-bold mb-0">Big Yard Team</p>
                        </div>
                </div>
            </div>

            @else

        @endif
{{--
            @if (Auth::user()->id ==! $token->user_id)
            <h2>No Orders yet!</h2>
            no orders here
            @endif
 --}}




    @endforeach

    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between footer p-3">
                <span>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-img">
                            {{-- <h4>Payment Methods </h4>
                            --}}
                            <a href="https://orange.sl"><img style="width: 25%"
                                    src="https://download.logo.wine/logo/Orange_Money/Orange_Money-Logo.wine.png"
                                    alt=""></a> <a href="https://africell.sl"><img style="width: 20%"
                                    src="https://www.nightwatchsl.com/wp-content/uploads/2020/04/AFR-600x197.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" id="bootstrap-css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <style>
       .text-danger strong {
    		color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}


		#container {
			background-color: #dcdcdc;
		}

    </style>

@endsection
