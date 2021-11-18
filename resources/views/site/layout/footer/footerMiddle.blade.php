<footer class="footer">
    <!-- End .cta -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 ml-md-5">
                    <div class="widget widget-about">
                        {{-- <img src="{{url('')}}{{$siteInfo->company_logo}}" class="footer-logo" alt="Footer Logo" --}}
                             width="105" height="25">
                        <p> {{ $siteInfo->short_description }}</p>

                        <div class="widget-call">
                            <i class="icon-phone"></i> سوالی دارید؟ 7روز هفته/24ساعته
                            <a href="tel:#">{{ $siteInfo->company_tell }}</a>
                        </div>
                        <!-- End .widget-call -->
                    </div>
                    <!-- End .widget about-widget -->
                </div>
                <!-- End .col-sm-6 col-lg-3 -->
                @foreach($allElecSymbol as $symbol)
                    <div class="col-sm-6 col-lg-3">
                        <img src="{{url('')}}{{$symbol->electrical_symbol}}" alt="{{$symbol->title}}" width="300"/>
                    </div>
                @endforeach
            <!-- End .col-sm-6 col-lg-3 -->

            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

</footer>
<!-- End .footer -->
