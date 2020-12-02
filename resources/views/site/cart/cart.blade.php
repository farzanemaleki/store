@extends('site.layout.inc.main')
@section('page-title')
    سبد خرید
@endsection
@section('main-content')

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">سبد خرید<span>فروشگاه</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index10.html">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        @if(!(Cart::content()->count()))
                        <div class="col-sm-12">
                                <div class="alert alert-info d-flex mx-auto col-sm-9">
                                    <li>سبد خرید شما خالی است.</li>
                                </div>
                        </div>
                        @else
                        <div class="col-lg-9">
                            @if(session('success-message'))
                            <div class="alert alert-success d-flex mx-auto col-sm-9">
                                <li>{{ Session::get('success-message') }}</li>
                            </div>
                                @elseif(session('alert-message'))
                                <div class="alert alert-danger d-flex mx-auto col-sm-9">
                                    <li>{{ Session::get('alert-message') }}</li>
                                </div>
                            @endif
                            <table class="table table-cart table-mobile">
                                <thead>
                                <tr>
                                    <th>محصول</th>
                                    <th>قیمت</th>
                                    <th>تعداد</th>
                                    <th>مجموع</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach(Cart::content() as $item)
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="{{route('site.product.show' , $item->model->id)}}">
                                                    <img src="{{url('')}}{{$item->model->image}}"
                                                         alt="{{$item->model->title}}">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="{{route('site.product.show' , $item->model->id)}}">{{$item->model->title}}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{number_format(intdiv((int)$item->model->price , 10)). ' '}}تومان</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" class="form-control" value="{{$item->qty}}" min="1" max="10"
                                                   step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">{{ number_format( intdiv((int)$item->model->price , 10 ) * $item->qty ). ' '}}تومان</td>
                                    <td class="remove-col">
                                        <form action="{{route('site.cart.destroy' , $item->rowId )}}" method="POST">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button class="btn-remove"><i class="icon-close"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table><!-- End .table table-wishlist -->


                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">جمع سبد خرید</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <tbody>
                                    <tr class="summary-subtotal">
                                        <td>جمع کل سبد خرید : </td>
                                        <td class="text-left">{{number_format(intdiv((int)str_replace( ',' , '' , Cart::subtotal()) , 10))}} تومان</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-tax">
                                        <td>مالیات و ارزش افزوده کالا (9درصد) :</td>
                                        <td class="text-left">{{number_format( intdiv( (int)str_replace( ',' , '' , Cart::tax()) , 10 ) )}} تومان</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-shipping">
                                        <td>شیوه ارسال : </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>مبلغ قابل پرداخت :</td>
                                        <td class="text-left">{{number_format( intdiv( (int)str_replace( ',' , '' , Cart::total()) , 10 ))}} تومان</td>
                                    </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">رفتن
                                    به صفحه پرداخت</a>
                            </div><!-- End .summary -->

                            <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>ادامه
                                        خرید</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                        @endif
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

@endsection
