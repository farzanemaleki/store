<aside class="col-lg-3">
    <div class="sidebar">
        <div class="widget widget-search">
            <h3 class="widget-title">جستجو</h3><!-- End .widget-title -->

            <form action="#">
                <label for="ws" class="sr-only">جستجوی اخبار</label>
                <input type="search" class="form-control" name="ws" id="ws" placeholder="جستجوی خبر مورد نظر" required="">
                <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">جستجو</span></button>
            </form>
        </div><!-- End .widget -->

        <div class="widget widget-cats">
            <h3 class="widget-title">دسته بندی ها</h3><!-- End .widget-title -->

            <ul>
                @foreach($allBlogCategory as $category)
                <li><a href="{{route('site.blog.category.index' , $category->id)}}">{{$category->topic}}<span>{{$category->count_blog($category->id)}}</span></a></li>
                @endforeach
            </ul>
        </div><!-- End .widget -->

        <div class="widget">
            <h3 class="widget-title">محبوب ترین اخبار</h3><!-- End .widget-title -->

            <ul class="posts-list">
                @foreach($bests as $best)
                <li>
                    <figure>
                        <a href="#">
                            <img src="{{url('')}}{{$best->image}}" alt="post">
                        </a>
                    </figure>

                    <div>
                        <span>{{$best->created_at}}</span>
                        <h4><a href="#">{!! str_limit($best->body , 120) !!}</a></h4>
                    </div>
                </li>
                @endforeach
            </ul><!-- End .posts-list -->
        </div><!-- End .widget -->

        <div class="widget widget-banner-sidebar">
            <div class="banner-sidebar-title">قسمت تبلیغات 280 در 280</div>
            <!-- End .ad-title -->

            <div class="banner-sidebar banner-overlay">
                <a href="#">
                    <img src="{{url('site/assets/images/blog/sidebar/banner.jpg')}}" alt="بنر">
                </a>
            </div><!-- End .banner-ad -->
        </div><!-- End .widget -->

        <div class="widget">
            <h3 class="widget-title">برچسب ها</h3><!-- End .widget-title -->

            <div class="tagcloud">
                @foreach($allBlog as $blog)
                <a href="javascript:void(0)">{{$blog->tags}}</a>
                    @endforeach
            </div><!-- End .tagcloud -->
        </div><!-- End .widget -->

        <div class="widget widget-text">
            <h3 class="widget-title">درباره بخش اخبار</h3><!-- End .widget-title -->

            <div class="widget-text-content">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم لورم ایپسوم متن ساختگی با لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم</p>
            </div><!-- End .widget-text-content -->
        </div><!-- End .widget -->
    </div><!-- End .sidebar -->
</aside><!-- End .col-lg-3 -->
