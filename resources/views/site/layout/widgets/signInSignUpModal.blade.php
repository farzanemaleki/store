<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">ورود</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">ثبت نام</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <form action="{{ url('login') }}" method="POST" >
                                    @csrf
                                    {{--                                        @method('sendCode')--}}
                                    <div class="form-group">
                                        <label for="mobile">موبایل *</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" required>
                                    </div>
                                    <!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="password">رمز عبور *</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>ورود</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember-2"
                                                   name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="signin-remember-2">مرا به خاطر
                                                بسپار؟</label>
                                        </div><!-- End .custom-checkbox -->
                                        {{-- @if (Route::has('password.request'))
                                            <a class="forgot-link" href="{{ route('password.request') }}">
                                                {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                                            </a>
                                        @endif --}}
                                    </div>
                                    <!-- End .form-footer -->
                                </form>
                                <!-- End .form-choice -->
                            </div>
                            <!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">نام و نام خانوادگی *</label>
                                        <input type="text" maxlength="255" minlength="3" value="{{ old('name') }}" class="form-control" id="name" name="name" required>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="mobile">شماره همراه شما *</label>
                                        <input type="text" maxlength="11" minlength="11" value="{{ old('mobile') }}" class="form-control" id="mobile" name="mobile" required>
                                    </div>
                                    <!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="password">رمز عبور *</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>ثبت نام</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">با
                                                <a href="#">قوانین و مقررات </a>موافقم *</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .form-footer -->
                                </form>
                                <!-- End .form-choice -->
                            </div>
                            <!-- .End .tab-pane -->
                        </div>
                        <!-- End .tab-content -->
                    </div>
                    <!-- End .form-tab -->
                </div>
                <!-- End .form-box -->
            </div>
            <!-- End .modal-body -->
        </div>
        <!-- End .modal-content -->
    </div>
    <!-- End .modal-dialog -->
</div>
<!-- End .modal -->
