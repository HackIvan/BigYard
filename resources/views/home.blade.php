@extends('layouts.front')


@section('content')

    <div class="pl-200 pr-200  overflow clearfix">
        <div class="categori-menu-slider-wrapper clearfix">
            <div class="categories-menu">
                <div class="category-heading">
                    <h3> All Categories <i class="pe-7s-angle-down"></i></h3>
                </div>
                <div class="category-menu-list">
                    <ul>
                        </li>
                        @foreach ($categories as $category)

                            <li>
                                <a href="{{ route('products.index', ['category_id' => $category->id]) }}"><img alt=""
                                        src="assets/img/icon-img/5.png">{{ $category->name }}<i
                                        class="pe-7s-angle-right"></i></a>

                                @php
                                $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                @endphp

                                @if ($children->isNotEmpty())
                                    <div class="category-menu-dropdown">

                                        @foreach ($children as $child)


                                            <div class="category-dropdown-style category-common4 mb-40">
                                                <h4 class="categories-subtitle">
                                                    <a
                                                        href="{{ route('products.index', ['category_id' => $child->id]) }}">{{ $child->name }}</a>
                                                </h4>
                                                <ul>

                                                    @php
                                                    $grandChild = TCG\Voyager\Models\Category::where('parent_id',
                                                    $child->id)->get();
                                                    @endphp
                                                    @if ($grandChild->isNotEmpty())

                                                        @foreach ($grandChild as $c)
                                                            <li><a
                                                                    href="{{ route('products.index', ['category_id' => $c->id]) }}">{{ $c->name }}</a>
                                                            </li>
                                                        @endforeach
                                                </ul>
                                        @endif
                                    </div>
                                @endforeach
                </div>
                </li>

                @endif
                @endforeach

                </ul>
            </div>
        </div>
        <div class="menu-slider-wrapper ">
            <div class="menu-style-3 menu-hover text-center">
                <nav>
                    <ul>
                        <li><a href="contact.html">About BigYard</a></li>
                        <li><a href="contact.html">Warehouse</a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="section" id="carousel">
                <div class="row">
                    <div class="col-lg-12 mr-auto ml-auto">
                        <!-- Carousel Card -->
                        <div class="card card-raised card-carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                                data-interval="3000">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="assets/j5.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/j2.jpeg" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/j1.jpeg" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                </a>
                            </div>
                        </div>
                        <!-- End Carousel Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>
        <div class="top-product-style">

            <div>
                <div id="electro1">
                    <div class="custom-row-2">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container border  pt-40 mb-40 rounded ">


        <div class="row pb-50">


            @foreach ($allProducts as $product)

                @include('product.single-product')
            @endforeach

        </div>

    </div>



    {{-- double banner area start --}}
    <div class="container border  pt-40 pb-40 rounded ">
        <div class="row">
            <div class="col-md-6 rounded">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <a href="">
                        <img class="card-img-top" src="assets/Family.jpg" alt="">
                    </a>
                </div>
                <!--/.Card-->
            </div>
            <div class="col-md-6">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <a href="">
                            <img class="card-img-top" src="assets/Phoneals.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
        </div>
    </div>
    <br>
    {{-- double banner area end --}}









    <div class="container border mt-50 pt-40 pb-40 rounded ">
        <h4 id="feat-sect">Featured Section</h4>
        <div class="row">

            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f1.png" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Plasma</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->

            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f2.png" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Apple</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f3.png" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Android </h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f4.jpg" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Laptops</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f5.jpg" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Utensils</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f6.jpg" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Hair</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f7.jpg" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Watch</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f8.png" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Shirts</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f9.jpg" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Toasters</h5>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f10.jpg" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Refrigerators</h5>
                    </div>
                    <!--/.Card content-->
                </div>

                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f11.jpg" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Keyboards</h5>
                    </div>
                    <!--/.Card content-->
                </div>

                <!--/.Card-->
            </div>
            <div class="col-sm-2">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="assets/f12.png" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>Printers</h5>
                    </div>
                    <!--/.Card content-->
                </div>

                <!--/.Card-->
            </div>
        </div>

    </div>





    {{-- Single banner area start --}}
    <div class="container pb-40 rounded ">
        <div class="row">
            <div class="col-lg-12">
                <!--Card-->
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <a href="">
                            <img class="card-img-top" src="assets/singlebanner.jpg" alt="">
                        </a>

                    </div>
                </div>
                <!--/.Card-->
            </div>
        </div>
        <br>
    </div>
    {{-- single banner area end --}}



    {{-- Featured Section styling --}}
    <style>
        #feat-sect {
            text-align: center;
            padding-bottom: 20px;
        }

    </style>

    <!-- Verified sellers area start -->
    <div class="popular-product-area wrapper-padding-3 pt-20 pb-20">
        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Verified Sellers</h2>
            </div>
            <div class="product-style">
                <div class="popular-product-active owl-carousel">
                    @foreach ($users as $user)
                        <div class="product-wrapper product-border mb-24">
                            <div class="product-img" style="width: 100%; height:60%">
                                <img alt="" src="{{ asset('storage/' . $user->avatar) }}">
                            </div>
                            <div class="funiture-product-content text-center">
                                @if ($user->role_id == 3)
                                    <h4>{{ $user->name }}</h4>
                                    seller
                                @else
                                    <h4>Become a seller</h4>
                                    <a href="/shops/create"> Register here</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Verified Sellers  area end -->

    <div class="androit-banner-wrapper wrapper-padding pb-25">
        <div class="container-fluid">
            <div class="androit-banner-img bg-img" style="background-image: url(assets/AfriPower.jpeg); back  ">
                <div class="androit-banner-content">
                    <!-- <h3>Xolo Fast T2 Smartphone, Android <br>7.0 Unlocked.</h3> -->
                    <!-- <a href="product-details.html">Buy Now →</a> -->
                </div>
                <div class="banner-price text-center">
                    <div class="banner-price-position">
                        {{-- <span class="banner-price-new">Place Adds Here</span>
                        --}}
                        <span class="banner-price-old">Place Your adds here</span>
                        <h6 style="color:white" class="">Le 20,000</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 3; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });

    </script>
@endsection


{{-- Black friday deals section start --}}
{{-- <div class="container border  pt-40 pb-40 rounded ">
    <h4 id="feat-sect">Black Friday Deals</h4>
    <div class="row">
        <div class="col-sm-2">
            <!--Card-->
            <div class="card card-cascade card-ecommerce wider">
                <!--Card image-->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="assets/f1.png" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body card-body-cascade text-center">
                    <!--Category & Title-->
                    <h5>Plasma</h5>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->

        </div>
        <div class="col-sm-2">
            <!--Card-->
            <div class="card card-cascade card-ecommerce wider">
                <!--Card image-->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="assets/f2.png" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body card-body-cascade text-center">
                    <!--Category & Title-->
                    <h5>Apple</h5>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>
        <div class="col-sm-2">
            <!--Card-->
            <div class="card card-cascade card-ecommerce wider">
                <!--Card image-->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="assets/f3.png" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body card-body-cascade text-center">
                    <!--Category & Title-->
                    <h5>Android </h5>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>
        <div class="col-sm-2">
            <!--Card-->
            <div class="card card-cascade card-ecommerce wider">
                <!--Card image-->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="assets/f4.jpg" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body card-body-cascade text-center">
                    <!--Category & Title-->
                    <h5>Laptops</h5>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>
        <div class="col-sm-2">
            <!--Card-->
            <div class="card card-cascade card-ecommerce wider">
                <!--Card image-->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="assets/f5.jpg" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body card-body-cascade text-center">
                    <!--Category & Title-->
                    <h5>Utensils</h5>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>
        <div class="col-sm-2">
            <!--Card-->
            <div class="card card-cascade card-ecommerce wider">
                <!--Card image-->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="assets/f6.jpg" alt="">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body card-body-cascade text-center">
                    <!--Category & Title-->
                    <h5>Hair</h5>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>
    </div>
    <br>
</div> --}}
{{-- Black friday deals section end --}}
