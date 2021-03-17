{{-- @extends('../cart.index') --}}
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Salone Mall</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">


    <!-- custom css here  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="../assets/css/mine.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="../assets/bootstrap/js/bootstrap.min.js">
    {{--
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    {{--
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- all css here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../assets/css/icofont.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/bundle.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/mine.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <!--Notification Section-->
    <header>
        <div class="header-bottom pt-40 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="logo-3">
                    <a href="{{ route('home') }}">
                        <img src="/The-usl-logo.png" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper">
                    <div class="trace-cart-wrapper">
                        @auth
                            <div class="categories-cart same-style">
                                <div class="same-style-icon">
                                    <a href="#"><i class="pe-7s-users"></i></a>
                                </div>
                                <div class="same-style-text">
                                    <a href=" {{ route('shops.create') }}">Register as Seller
                                    </a>
                                </div>
                            </div>
                        @endauth
                        <div class="categories-cart same-style">
                            <div class="same-style-icon">
                                <a href="{{ route('cart.index') }}"><i class="pe-7s-cart"></i></a>
                            </div>
                            <div class="same-style-text">
                                <a href="{{ route('cart.index') }}">
                                    <div class="badge badge-danger " style=" font-size:14px;">
                                        @auth
                                            {{ Cart::session(auth()->id())->getContent()->count() }}
                                        @else
                                            0
                                        @endauth
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="categories-wrapper">
                        <form action="#">
                            <input placeholder="Enter Your key word" type="text">
                            <button type="button"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper">
                    @auth
                    @else
                        <div class="categories-cart same-style">
                            <div class="same-style-icon">
                                <a href="#"><a href="#"><i class="pe-7s-user"></i></a>
                            </div>
                            <div class="same-style-text">
                                <a href="{{ route('login') }}">Login <br>
                                </a>
                            </div>
                        </div>
                    @endauth
                    @auth


                        <div class="categories-cart same-style">
                            <div class="same-style-icon">
                                <a href="#"><a href="#"><i class="pe-7s-users"></i></a>
                            </div>
                            <div class="same-style-text">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout <br>

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="categories-cart same-style">
                            <div class="same-style-icon">
                                <a href="#"><a href="#"><i class="pe-7s-users"></i></a>
                            </div>
                            <div class="same-style-text">
                                <a href="{{ route('register') }}">Register <br>
                                </a>
                            </div>
                        </div>
                    @endauth
                </div>

            </div>
        </div>
    </header>
    <!-- header end -->

      <!-- checkout-area start -->
      <div class="checkout-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="coupon-accordion">



                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <form action="{{route('orders.store')}}" method="post">
                        @csrf
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">

                                <div class="col-md-12 form-group" >
                                    <div class="checkout-form-list">
                                        <label for="">Full Name <span class="required">*</span></label>
                                        <input type="text" name="shipping_fullname" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="checkout-form-list">
                                        <label for="">State<span class="required">*</span></label>
                                        <input type="text" name="shipping_state" id="" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <div class="checkout-form-list">
                                        <label for="">City<span class="required">*</span></label>
                                        <input type="text" name="shipping_city" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="checkout-form-list">
                                        <label for="">Postcode / Zip <span class="required">*</span></label>
                                        <input type="number" name="shipping_zipcode" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="checkout-form-list">
                                        <label for="">Mobile <span class="required">*</span></label>
                                        <input type="number" name="shipping_phone" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="checkout-form-list">
                                        <label for="">Address<span class="required">*</span></label>
                                        <input type="text" name="shipping_address" id="" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="checkout-form-list">
                                        <h4>Payment option</h4>

                                    </div>
                                </div>


                                <div class="col-md-12 form-group">
                                    <div class="">
                                        <label class="form-check-label">
                                            <input type="radio" class="" name="payment_method" id="" value="cash_on_delivery">
                                       Cash on Delivery
                                        </label>
                                    </div>
                                    <div class="">
                                        <label class="form-check-label">
                                            <input type="radio" class="" name="payment_method" id="" value="orange_money">
                                          OrangeMoney
                                        </label>
                                    </div>
                                    <div class="checkout-form-list">
                                        <label class="form-check-label">
                                            <input type="radio" class="" name="payment_method" id="" value="orange_money">
                                          OrangeMoney
                                        </label>
                                    </div>
                                    <div class="checkout-form-list">
                                        <label class="form-check-label">
                                            <input type="radio" class="" name="payment_method" id="" value="orange_money">
                                          OrangeMoney
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="order-button-payment">
                                        <input type="submit" value="Place order" />
                                    </div>
                                    {{-- <button type="submit" class="btn btn-primary mt-3">Place Order</button> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="your-order">
                        <h3>Your order </h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        {{-- <th class="product-name">Product</th> --}}
                                        {{-- <th class="product-total">Total</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($cartItems as $item) --}}

                                    <tr class="order-total">
                                        <th><strong> Total</strong></th>




                                        <td><strong><span class="amount"> <span>Le {{ \Cart::session(auth()->id())->getTotal() }}</span></span></strong>

                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>


                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="panel-group" id="faq">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->









    <footer class="footer-area">
        <div class="footer-top-3 black-bg pt-75 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xl-4">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Contact Us</h3>
                            <div class="footer-info-wrapper-2">
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Address:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>88 Soldier street
                                            <br>Freetown Sierra Leone
                                        </p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Phone:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>
                                            +23230009366
                                            <br>+23278848040
                                        </p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Email:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p><a href="#">info@salonemall.com</a>
                                            <br><a href="#">sales@salonemall.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">My Account</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="login.html">Login Hare</a></li>
                                    <li><a href="cart.html">Cart History</a></li>
                                    <li><a href="checkout.html"> Payment History</a></li>
                                    <li><a href="shop.html">Product Tracking</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xl-2">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Information</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Our Service</a></li>
                                    <li><a href="#">Delivery Services</a></li>
                                    <li><a href="#"> Vendor Detail</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget widget-right mb-40">
                            <h3 class="footer-widget-title-3">Service</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="#">Product Service</a></li>
                                    <li><a href="#">Payment Service</a></li>
                                    <li><a href="#"> Discount Service</a></li>
                                    <li><a href="#">Shopping Service</a></li>
                                    <li><a href="#">Promotional Add</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle black-bg-2 pt-35 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-car"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Beteh Shipping</h3>
                                <p>Same day Shipping in freetown</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-shield"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Money Back Guarentee</h3>
                                <p>Changed your mind? we've got you covered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-headphones"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Online Support</h3>
                                <p>24/7 Profession Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom  black-bg pt-25 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Privacy Policy </a></li>

                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright f-right mrg-5">
                            <p>
                                Copyright ©
                                <a href="https://hastech.company/">Dissertation IPAM</a> 2020 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="assets/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4>
                                        </td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has beenin the stand ard dummy text ever since the
                                                1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4>
                                        </td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight </h4>
                                        </td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand </h4>
                                        </td>
                                        <td class="compare-brand compare-common">
                                            <p>HasTech</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color </h4>
                                        </td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size </h4>
                                        </td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">


                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">

                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="assets/img/quick-view/l1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>name one</h3>
                            <div class="price">
                                <span class="old">aah</span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et
                                dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">

                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





    <!-- all js here -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- custom script here  -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>

</body>

</html>
