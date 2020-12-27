<aside class="col-lg-3 order-lg-first">
    <div class="sidebar sidebar-shop">
        <div class="widget widget-clean">
            <label>فیلترها : </label>
        </div><!-- End .widget widget-clean -->

        <div class="widget widget-collapsible">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                   aria-controls="widget-1">
                    همه دسته بندی
                </a>
            </h3><!-- End .widget-title -->

            <div class="collapse show" id="widget-1">
                <div class="widget-body">
                    <div class="filter-items filter-items-count">
                        @foreach($allcategory as $category)
                            <div class="filter-item">
                                <div class="custom-control">
                                    <a href="{{route('site.productCategory.show' , $category->id)}}" >{{$category->title}}</a>
                                </div><!-- End .custom-checkbox -->
                                <span class="item-count">{{$category->countsProducts($category->id)}}</span>
                            </div><!-- End .filter-item -->
                        @endforeach
                    </div><!-- End .filter-items -->
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->
    </div><!-- End .sidebar sidebar-shop -->
</aside><!-- End .col-lg-3 -->
