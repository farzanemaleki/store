@extends('site.layout.inc.main')
@section('page-title')
    درباره ما
@endsection
@section('main-content')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ورود / ثبت نام</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
             style="background-image: url({{url('site/assets/images/login-background.jpg')}})">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                                   aria-controls="signin-2" aria-selected="true">ورود</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                   role="tab" aria-controls="register-2" aria-selected="false">ثبت نام</a>
                            </li>
                        </ul>
                        <div class="text-danger">
                            @foreach ($errors->all() as $error)
                                {{$error}}}
                            @endforeach
                        </div>
                        @if(session('error'))
                            <div class="text-danger"> {{Session::get('error')}}</div>
                        @elseif(session('message'))
                            <div class="bg-warning"> {{Session::get('message')}}</div>
                        @endif
                        <div class="tab-content">
                            <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="singin-email-2">{{ __('شماره موبایل خود را وارد کنید') }}</label>
                                        <div class="col-md-12">
                                            <input id="mobile" type="text"
                                                   class="form-control"
                                                   name="mobile" value="{{ old('mobile') }}" required
                                                   autocomplete="mobile" autofocus>
                                            <span class="invalid-feedback" role="alert">
                                    </span>
                                        </div>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password-2">{{ __('رمز عبور') }}</label>
                                        <div class="col-md-12">
                                            <input id="password" type="password"
                                                   class="form-control"
                                                   name="password" required autocomplete="current-password">
                                            <span class="invalid-feedback" role="alert">
                                    </span>
                                        </div>
                                    </div><!-- End .form-group -->

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
                                        @if (Route::has('password.request'))
                                            <a class="forgot-link" href="{{ route('password.request') }}">
                                                {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                                            </a>
                                        @endif
                                    </div><!-- End .form-footer -->
                                </form>
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                                 aria-labelledby="register-tab-2">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">{{ __('نام خود را وارد کنید') }}</label>

                                        <div class="col-md-12">
                                            <input id="name" type="text"
                                                   class="form-control" name="name"
                                                   value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            <span class="invalid-feedback" role="alert">
                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">شماره موبایل </label>
                                        <div class="col-md-12">
                                            <input id="mobile" type="text"
                                                   class="form-control"
                                                   name="mobile"
                                                   value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                                            <span class="invalid-feedback" role="alert">
                                    </span>
                                        </div>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password-2">رمز عبور *</label>

                                        <div class="col-md-12">
                                            <input id="password" type="password"
                                                   class="form-control"
                                                   name="password" required autocomplete="new-password">
                                            <span class="invalid-feedback" role="alert">
                                    </span>
                                        </div>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>ثبت نام</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy-2"
                                                   required="">
                                            <label class="custom-control-label" for="register-policy-2">من با <a
                                                    href="#">قوانین و مقررات</a> موافقم *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main>
@endsection

