@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش اطلاعات
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش اطلاعات سایت</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.siteInfo.index')}}">اطلاعات سایت</a>
                        </li>
                        <li class="breadcrumb-item active">ویرایش اطلاعات سایت</li>
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
            <div class="card-title">مشخصات اطلاعات سایت</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.siteInfo.update' , $info->id)}}" role="form" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-------------------Company name---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> نام شرکت</lable>
                            <input type="text" class="form-control" name="company_name" value="{{$info->company_name}}"/>
                        </div>
                    </div>
                    <!-------------------Company Logo---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> لوگو شرکت</lable>
                            <div class="input-group">
                                <input id="company_logo" type="file" name="company_logo">
                            </div>
                        </div>
                    </div>
                    @if($info->company_logo != null && $info->company_logo != '')
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="company_logo">عکس قبلی لوگو</label>
                                <a class="d-inline-block my-2" href="{{ url('') }}{{ $info->company_logo }}"  for="company_logo ">{{ url('') }}{{ $info->company_logo }}</a>

                                <img name="company_logo" style="width: 20%; margin-top: 10px" src="{{ url('') }}{{ $info->company_logo }}"
                                     alt="{{ $info->company_name }}">

                            </div>
                        </div>
                    @else
                        <div class="col-md-4 col-sm-12">
                            <label for="company_logo">عکس قبلی لوگو: </label>
                            <span class="text-danger mr-1">بدون لوگو</span>
                        </div>
                    @endif
                    <!-------------------Company Tell---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> شماره تماس شرکت</lable>
                            <input type="tel" class="form-control" name="company_tell" value="{{$info->company_tell}}"/>
                        </div>
                    </div>
                    <!-------------------Company name---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> شماره تماس مدیر</lable>
                            <input type="tel" class="form-control" name="manager_tell" value="{{$info->manager_tell}}"/>
                        </div>
                    </div>
                    <!-------------------short_description---------------->
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <lable>توضیح کوتاه درباره شرکت</lable>
                            <input type="text" class="form-control" name="short_description" value="{{$info->short_description}}" />
                        </div>
                    </div>
                    <!-------------------description---------------->
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <lable>توضیحات</lable>
                            <textarea rows="5" type="text" class="form-control" name="description" id="description"  placeholder="توضیحات زیر تیتر را وارد کنید ...">{{$info->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.siteInfo.index') }}">لغو عملیات</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



@stop
@section('footerScripts')
    <!-- bs-custom-file-input -->
    <script
        src="{{ url('adminPanel/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ url('adminPanel/plugins/ckeditor/ckeditor.js') }}"></script>

    <script !src="">

        CKEDITOR.replace('description', {
            filebrowserUploadMethod : 'form',
            filebrowserUploadUrl: '/dashboard/siteInfo/save_image',
            filebrowserImageUploadUrl: '/dashboard/siteInfo/save_image',

        });

    </script>



    <script !src="">
        $('.nav-link').removeClass('active');

        $('#infos').addClass('menu-open');
        $('#infos> a').addClass('active');
        $('#allinfos').addClass('active');
@stop


