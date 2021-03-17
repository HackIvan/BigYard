
                            <div class="col-sm-2">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img alt="Product-Image" src="{{asset('storage/'.$product->cover_img)}}">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="{{ route('cart.add', $product->id) }}">
                                                <i class="pe-7s-cart"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product-content-6">


                                    </div>

                                </div>
                                <h6 style="text-align: center">{{ $product->name }}</h6>
                                <p style="text-align: center">Le {{ $product->price }}</p>
                            </div>
