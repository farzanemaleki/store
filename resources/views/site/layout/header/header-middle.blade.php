<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler">
                <span class="sr-only">فهرست</span>
                <i class="icon-bars"></i>
            </button>

            <a href="index10.html" class="logo">
                <img src="{{ url('site/assets/images/demos/demo-4/logo.png') }}" alt="Molla Logo" width="105" height="25">
            </a>
        </div>
        <!-- End .header-left -->

        <div class="header-center">
            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    @csrf
                    <div class="header-search-wrapper search-wrapper-wide">
                        <label for="q" class="sr-only">جستجو</label>
                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        <input type="search" class="form-control" name="q" id="q" placeholder="جستجوی محصولات ..." required>
                    </div>
                    <!-- End .header-search-wrapper -->
                </form>
            </div>
            <!-- End .header-search -->
        </div>

        <div class="header-right">
            <div class="dropdown cart-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <div class="icon">
                        <i class="icon-shopping-cart"></i>
                        @if(Cart::instance('default')->count() > 0)
                            <span class="cart-count">
                                {{ Cart::instance('default')->count()}}
                            </span>
                        @endif
                    </div>
                    <p>سبد خرید</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @if(Cart::instance('default')->count() > 0)
                    <div class="dropdown-cart-products">
                        @foreach(Cart::content() as $item)
                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="{{ route('site.product.show' , $item->id) }}">{{ $item->model->title }}</a>
                                </h4>

                                <span class="cart-product-info">
                                    <span class="cart-product-qty">{{ $item->qty }}  </span>
                                <span class="cart-product-qty d-inline-block  text-warning">x</span> {{ number_format($item->model->price) }} تومان
                                </span>
                            </div>
                            <!-- End .product-cart-details -->

                            <figure class="product-image-container">
                                <a href="{{ route('site.product.show' , $item->id) }}" class="product-image">
                                    <img src="{{ url('') }}{{ $item->model->image }}" alt="{{ $item->model->title }}">
                                </a>
                            </figure>
                            <a href="site.cart.index">
                            <form action="{{ route('site.cart.destroy' , $item->rowId) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn-remove"><i class="icon-close"></i></button>
                            </form>
                            </a>
                        </div>
                        <!-- End .product -->
                        @endforeach
                    </div>

                    <!-- End .cart-product -->
                        <div class="dropdown-cart-total">
                            <span>مجموع سبد خرید : </span>

                            <span class="cart-total-price">
                                {{ Cart::subtotal() }}
                                 تومان

                            </span>
                        </div>
                    <div class="dropdown-cart-total">
                        <span>مجموع (با مالیت 9%) : </span>

                        <span class="cart-total-price">
                            {{ Cart::total() }}
                            تومان</span>
                    </div>
                    <!-- End .dropdown-cart-total -->

                    <div class="dropdown-cart-action">
                        <a href="{{ route('site.cart.index')  }}" class="btn btn-primary">مشاهده سبد خرید</a>
                        <a href="#" class="btn btn-outline-primary-2"><span>پرداخت</span><i
                                class="icon-long-arrow-left"></i></a>
                    </div>
                    <!-- End .dropdown-cart-total -->
                    @else
                        <p>سبد خرید خالی می باشد!</p>
                    @endif
                </div>
                <!-- End .dropdown-menu -->
            </div>
            <!-- End .cart-dropdown -->
        </div>
        <!-- End .header-right -->
    </div>
    <!-- End .container -->
</div>
<!-- End .header-middle -->
