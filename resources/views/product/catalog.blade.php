@extends('layouts.front')

@section('product-catalog')
<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(../assets/banner2.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2> Search Result</h2>
            <ul>
                <li><a href="/">home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-page-wrapper shop-page-padding ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar mr-50">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Search Products</h3>
                        <div class="sidebar-search">



                            <form action="{{route('products.search')}}" method="GET">
                                <input name="query" placeholder="Search Products..." type="text">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-categories">
                            <ul>
                                <li><a href="#">Accessories <span>4</span></a></li>
                                <li><a href="#">Book <span>9</span></a></li>
                                <li><a href="#">Clothing <span>5</span> </a></li>
                                <li><a href="#">Homelife <span>3</span></a></li>
                                <li><a href="#">Kids & Baby <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Top rated products</h3>
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
                <div class="shop-product-wrapper res-xl res-xl-btn">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                    <p><span>{{$products->total()}}</span> Product Found</p>
                                </div>

                            </div>

                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar1" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach ($products as $product)


                                    <div class="col-lg-6 col-md-6 col-xl-3">
                                        <div class="product-wrapper mb-30">
                                            <div class="product-img">
                                            <a href="{{ route('cart.add', $product->id) }}">
                                                    <img alt="" src="{{asset('storage/'.$product->cover_img)}}">
                                                </a>
                                                <span>hot</span>
                                                <div class="product-action">

                                                    <a class="animate-top" title="Add To Cart" href="{{ route('cart.add', $product->id) }}">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="#">{{$product->name}}</a></h4>
                                                <span>Le {{$product->price}}.00</span>
                                            <p>{{$product->description}}</p>
                                            </div>
                                        </div>
                                   </div>

                                   @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pagination-style mt-30 text-center">

                       {{$products->appends(['query' => request ('query')])->render()}}


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
