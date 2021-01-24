@extends('adminpanel.layout')
@section('pageTitle')
    افزودن همکار جدید
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن همکار جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">همکار جدید</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="col-sm-12">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger col-sm-3">
                <li>{{$error}}</li>
            </div>
        @endforeach
    </div>
    {{--    <---------card header------>--}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">مشخصات همکار جدید</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.partner.store')}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-------------------Company name---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> نام شرکت همکار</lable>
                            <input type="text" class="form-control" name="name" placeholder="نام شرکت همکار را وارد کنید ..." value="{{old('name')}}" />
                        </div>
                    </div>
                    <!-------------------manager_name---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>نام مدیر شرکت</lable>
                            <input type="text" class="form-control" name="manager_name" placeholder="نام مدیر شرکت را وارد کنید ..." value="{{old('manager_name')}}" />
                        </div>
                    </div>
                    <!-------------------phone---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>شماره تماس</lable>
                            <input type="text" class="form-control" name="phone" title="Error Message" pattern="[0-9]{1}[0-9]{10}" placeholder="شماره تماس شرکت را وارد کنید ..." value="{{old('phone')}}">

                        </div>
                    </div>
                    <!-------------------address---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>آدرس</lable>
                            <input type="text" class="form-control" name="address" placeholder="آدرس شرکت را وارد کنید ..." value="{{old('address')}}" />
                        </div>
                    </div>
                    <!-------------------email---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>ایمیل</lable>
                            <input type="email" class="form-control" name="email"  placeholder="ایمیل شرکت را وارد کنید ..." value="{{old('email')}}" />
                        </div>
                    </div>
                    <!-------------------logo---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable for="logo"> لوگو شرکت </lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo">
                                    <lable class="custom-file-label" for="logo ">لوگو موردنظر خود راانتخاب کنید </lable>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.partner.index') }}">لغو عملیات</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
@section('footerScripts')
    <!-- bs-custom-file-input -->
    <script src="{{ url('adminPanel/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ url('adminPanel/plugins/ckeditor/ckeditor.js') }}"></script>


    <script !src="">
        $('.nav-link').removeClass('active');

        $('#partners').addClass('menu-open');
        $('#partners> a').addClass('active');
        $('#new_partner').addClass('active');
@stop

