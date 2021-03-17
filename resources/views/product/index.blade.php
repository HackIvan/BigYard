@extends('layouts.front')



@section('product-category')

<div class="container">

    <div class="section-title-4 text-center">

        <h2 style="color: red">{{$categoryName ?? null}} </h2>
    </div>

</div>

@endsection

@section('product-category-1')
<div class="shop-page-wrapper shop-page-padding pt-50 pb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar mr-50">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Search Products</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Search Products..." type="text">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-categories">
                            <ul>



                            <li><a href="#">{{$categoryName ?? null}}<span>4</span></a></li>

                                <li><a href="#">Book <span>9</span></a></li>
                                <li><a href="#">Clothing <span>5</span> </a></li>
                                <li><a href="#">Homelife <span>3</span></a></li>
                                <li><a href="#">Kids & Baby <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Recent Orders</h3>
                        <div class="sidebar-top-rated-all">
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-product-wrapper">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                        <div class="shop-product-content tab-content">

                            <div id="grid-sidebar14" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-lg-12">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img alt="Product-Image" src="{{asset('storage/'.$product->cover_img)}}">
                                                </a>
                                                <span>hot</span>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">{{$product->name}}</a></h4>
                                                    <span>Le {{$product->price}}</span>
                                                    <p>{{$product->description}} </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">


                                                        <a class="btn-hover list-btn-style" href="{{ route('cart.add', $product->id) }}">add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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

@endsection

{{--
<div class="col-lg-12 col-xl-6">
    <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
        <div class="product-img list-img-width">
            <a href="#">
                <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
            </a>
            <span>new</span>
            <div class="product-action-list-style">
                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                    <i class="pe-7s-look"></i>
                </a>
            </div>
        </div>
        <div class="product-content-list">
            <div class="product-list-info">
                <h4><a href="#">Navy Bird Print</a></h4>
                <span>$120.00</span>
                <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
            </div>
            <div class="product-list-cart-wishlist">
                <div class="product-list-cart">
                    <a class="btn-hover list-btn-style" href="#">add to cart</a>
                </div>
                <div class="product-list-wishlist">
                    <a class="btn-hover list-btn-wishlist" href="#">
                        <i class="pe-7s-like"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
