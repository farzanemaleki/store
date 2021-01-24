@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش همکار
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش همکار</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.partner.index')}}">همکاران</a></li>
                        <li class="breadcrumb-item active">ویرایش همکار</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="col-sm-12">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger col-sm-9">
                <li>{{$error}}</li>
            </div>
        @endforeach
    </div>
    {{--    <---------card header------>--}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">مشخصات همکار</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.partner.update' , $partner->id)}}" role="form" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-------------------Company name---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> نام شرکت همکار</lable>
                            <input type="text" class="form-control" name="name" value="{{$partner->name}}"/>
                        </div>
                    </div>
                    <!-------------------manager_name---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>نام مدیر شرکت</lable>
                            <input type="text" class="form-control" name="manager_name"
                                   value="{{$partner->manager_name}}"/>
                        </div>
                    </div>
                    <!-------------------phone---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>شماره تماس</lable>
                            <input type="text" class="form-control" name="phone" title="Error Message"
                                   pattern="[0-9]{1}[0-9]{10}" value="{{$partner->phone}}">

                        </div>
                    </div>
                    <!-------------------address---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>آدرس</lable>
                            <input type="text" class="form-control" name="address" value="{{ $partner->address }}"/>
                        </div>
                    </div>
                    <!-------------------email---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>ایمیل</lable>
                            <input type="email" class="form-control" name="email" value="{{$partner->email}}"/>
                        </div>
                    </div>
                    <!-------------------image---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable for="logo"> لوگو همکار</lable>
                            <div class="input-group">
                                  <input type="file" name="logo">
                            </div>
                        </div>
                    </div>
                    @if($partner->logo != null && $partner->logo != '')
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="logo">لوگو قبلی همکار</label>
                                <img name="logo" style="width: 50%" src="{{ url('') }}{{ $partner->logo }}"
                                     alt="{{ $partner->name }}">
                            </div>
                        </div>
                    @else
                        <div class="col-md-4 col-sm-12">
                            <label for="logo">لوگو قبلی همکار: </label>
                            <be/>
                            <span class="text-danger mr-1">بدون لوگو</span>
                        </div>
                    @endif
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
    </script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#partners').addClass('menu-open');
        $('#partners> a').addClass('active');
        $('#new_partner').addClass('active');
@stop



