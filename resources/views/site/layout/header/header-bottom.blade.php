<div class="header-bottom sticky-header">
    <div class="container">
        <div class="header-left">
            <div class="dropdown category-dropdown" style="margin-right: -50px">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="فهرست دسته بندی ها">
                    فهرست دسته بندی ها <i class="icon-angle-down"></i>
                </a>

                <div class="dropdown-menu">
                    <nav class="side-nav">
                        <ul class="menu-vertical sf-arrows" style="margin-right: 0px">
                            @foreach($allcategory as $category)
                                <li  >
                                    <a href="{{ route('site.productCategory.show' , $category->id) }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- End .menu-vertical -->
                    </nav>
                    <!-- End .side-nav -->
                </div>
                <!-- End .dropdown-menu -->
            </div>
            <!-- End .category-dropdown -->
        </div>
        <!-- End .header-left -->

        <div class="header-center">
            <nav class="main-nav">
                <ul class="menu">
                    <li class="megamenu-container">
                        <a href="{{ route('homepage') }}" class="sf-with-ul active">خانه</a>
                    </li>
                    <li>
                        <a href="{{route('site.shop.index')}}" class="sf-with-ul">فروشگاه</a>
                    </li>
                    <li>
                        <a href="{{route('site.blog.index')}}" class="sf-with-ul">اخبار</a>
                    </li>

                </ul>
                <!-- End .menu -->
            </nav>
            <!-- End .main-nav -->
        </div>
        <!-- End .header-center -->

        <div class="header-right">
            <i class="la la-lightbulb-o" style="color:red"></i>
            <p>خرید<span class="highlight">&nbsp;تا 30 درصد تخفیف</span></p>
        </div>
    </div>
    <!-- End .container -->
</div>
<!-- End .header-bottom -->
