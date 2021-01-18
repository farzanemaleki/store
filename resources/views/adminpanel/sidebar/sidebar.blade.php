<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{url('adminPanel/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                {{--                <div class="image">--}}
                {{--                    <img src="" class="img-circle elevation-2" alt="User Image">--}}
                {{--                </div>--}}
                <div class="info">
                    <a href="#" class="d-block">
                        @auth()
                            {{Auth::user()->name}}
                        @else
                            نام کاربری
                        @endauth
                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <!-----   dashboard   ------>
                    <li class="nav-item" id="dashboard">
                        <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                داشبورد
                            </p>
                        </a>
                    </li>
                    <!-----        Members   ------>
                    <li class="nav-item has-treeview" id="members">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                کاربران سایت
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\User::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.members.index')}}" id="allmembers" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست همه کاربران سایت</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        products   ------>
                    <li class="nav-item has-treeview" id="products">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-list-alt"></i>
                            <p>محصولات
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\Product::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.product.index')}}" id="allProdacts" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست همه محصولات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.product.create')}}" class="nav-link" id="new-products">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>افزودن محصول جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        product categories   ------>
                    <li class="nav-item has-treeview" id="categories">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                دسته بندی محصولات
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\ProductCategory::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.productCategory.index')}}" id="allCategory"
                                   class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست همه دسته بندی ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.productCategory.create')}}" class="nav-link"
                                   id="new-Category">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>افزودن دسته بندی جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        product Attribiutes   ------>
                    <li class="nav-item has-treeview" id="attribiutes">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                ویژگی محصولات
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\productAttribiutes::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.productAttribiutes.index')}}" id="allAttr"
                                   class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست همه ویژگی ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.productAttribiutes.create')}}" class="nav-link"
                                   id="newAttr">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>افزودن ویژگی جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        blogs   ------>
                    <li class="nav-item has-treeview" id="blogs">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                نوشته ها
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\Blog::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.blog.index')}}" id="allblog" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست همه نوشته ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.blog.create')}}" class="nav-link" id="newblog">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>افزودن نوشته جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        blogs category   ------>
                    <li class="nav-item has-treeview" id="blogCategory">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                دسته بندی نوشته ها
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\BlogCategory::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.blogCategory.index')}}" id="allBlogCategory"
                                   class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست دسته بندی نوشته ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.blogCategory.create')}}" class="nav-link"
                                   id="newBlogCategory">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>افزودن دسته بندی جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        Comments   ------>
                    <li class="nav-item has-treeview" id="comments">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                 همه نظرات
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\Comment::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.comments.index')}}" id="allcomments" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نظرات سایت
                                        <i class="right fa fa-angle-left"></i>
                                        <span class="badge badge-info right">{{ \App\Comment::where('confirmed', 1)->count()}}</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.comments.unconfirmed')}}" id="allunconfirmed" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نظرات تایید نشده
                                        <span class="badge badge-danger right">{{ \App\Comment::where('confirmed', 0)->count()}}</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        Comments   ------>
                    <li class="nav-item has-treeview" id="orders">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                 همه سفارشات
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\Payment::where('status' , 'OK')->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.orders.index')}}" id="allorders" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>سفارشات کاربران
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----        Site Infos   ------>
                    <li class="nav-item has-treeview" id="infos">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                 مدیریت اطلاعات سایت
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\SiteInfo::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.siteInfo.index')}}" id="allinfos" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>اطلاعات
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----         Electrical Symbol   ------>
                    <li class="nav-item has-treeview" id="Elecs">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                نماد الکترونیکی
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\ElectricalSymbol::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.elecSymbol.index')}}" id="allElecs"
                                   class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست همه نمادها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.elecSymbol.create')}}" class="nav-link" id="newElecs">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>افزودن نماد جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-----         social media   ------>
                    <li class="nav-item has-treeview" id="medias">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                شبکه های اجتماعی
                                <i class="right fa fa-angle-left"></i>
                                <span class="badge badge-info right">{{ \App\SocialMedia::all()->count()}}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.socialMedia.index')}}" id="allmedias"
                                   class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست شبکه های اجتماعی</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.socialMedia.create')}}" class="nav-link" id="newmedia">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>افزودن شبکه اجتماعی جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!------------Exit ------------->
                    <li class="nav-item has-treeview">
                        <a href="/logoutUser" class="nav-link">
                            <i class="fa fa-sign-out right"></i>
                            <p>
                                خروج
                            </p>
                        </a>
                    </li>
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-plus-square-o"></i>--}}
                    {{--                            <p>--}}
                    {{--                                بیشتر--}}
                    {{--                                <i class="fa fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="pages/examples/404.html" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>ارور 404</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="pages/examples/500.html" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>ارور 500</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="pages/examples/blank.html" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>صفحه خالی</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="starter.html" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>صفحه شروع</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-header">متفاوت</li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-file"></i>--}}
                    {{--                            <p>مستندات</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-header">برچسب‌ها</li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-circle-o text-danger"></i>--}}
                    {{--                            <p class="text">مهم</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-circle-o text-warning"></i>--}}
                    {{--                            <p>هشدار</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-circle-o text-info"></i>--}}
                    {{--                            <p>اطلاعات</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
