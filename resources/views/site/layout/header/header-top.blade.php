<div class="header-top">
    <div class="container">
        <div class="header-left">
            <a href="tel:#"><i class="icon-phone"></i>تلفن تماس : {{$siteInfo->company_tell}}</a>
        </div>
        <!-- End .header-left -->

        <div class="header-right">

            <ul class="top-menu pl-5">
                <li>
                    <a href="#">لینک ها</a>
                    <ul>
                        @if(Auth::user())
                        <li>
                            <div class="header-dropdown">
                                <a href="#">{{Auth::user()->name}}</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="{{route('user.account.index')}}">صفحه کاربری شما</a></li>
                                        <li><a href="{{route('logoutUser')}}">خروج</a></li>
                                    </ul>
                                </div>
                                <!-- End .header-menu -->
                            </div>
                        </li>
                        @else
                        <li><a href="#signin-modal" data-toggle="modal">کاربر مهمان</a></li>
                        <li><a href="#signin-modal" data-toggle="modal">ورود / ثبت نام</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
            <!-- End .top-menu -->
        </div>
        <!-- End .header-right -->

    </div>
    <!-- End .container -->
</div>
<!-- End .header-top -->
