@extends('adminpanel.layout')
@section('pageTitle')
    افزودن دسته بندی جدید
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن دسته بندی جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">دسته بندی جدید</li>
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
            <div class="card-title">مشخصات دسته بندی جدید</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.blogCategory.store')}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-------------------topic---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> نام دسته بندی</lable>
                            <input type="text" class="form-control" name="topic" placeholder="نام دسته بندی خود را وارد کنید ..." value="{{old('topic')}}" />
                        </div>
                    </div>
                    <!-------------------tags---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>تگ های دسته بندی</lable>
                            <input class="form-control" id="tags" name="tags" placeholder="تگ دسته بندی را وارد کنید ..." value="{{old('tags')}}" />
                        </div>
                    </div>
                    <!-------------------parent_id---------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> انتخاب دسته بندی</lable>
                            <select class="form-control" name="parent_id">
                                <option value=""><span class=" text-darkwhite">انتخاب دسته بندی...</span></option>
                                <option value="0">دسته بندی مادر</option>
                                @foreach($allblogCategory as $category)
                                    <option value="{{$category->id}}">{{$category->topic}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-------------------image---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable for="image"> عکس دسته بندی</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <lable class="custom-file-label" for="image ">عکس موردنظر خود راانتخاب کنید </lable>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------status---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> وضعیت نمایش دسته بندی</lable>
                            <select class="form-control" name="status">
                                <option value=""><span class=" text-darkwhite">انتخاب وضعیت دسته بندی...</span></option>
                                <option value="0">پیش نویس</option>
                                <option value="1">انتشار</option>
                            </select>
                        </div>
                    </div>
                    <!-------------------body---------------->
                    <div class="col-sm-12 col-md-10">
                        <div class="form-group">
                            <lable>توضیح کوتاه دسته بندی</lable>
                            <textarea rows="2" class="form-control" id="body" name="body" placeholder="توضیح کوتاه دسته بندی را وارد کنید ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.blogCategory.index') }}">لغو عملیات</a>
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

        CKEDITOR.replace('body', {
            filebrowserUploadMethod : 'form',
            filebrowserUploadUrl: '/dashboard/blogCategory/save_image',
            filebrowserImageUploadUrl: '/dashboard/blogCategory/save_image',

        });

    </script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#blogCategory').addClass('menu-open');
        $('#blogCategory> a').addClass('active');
        $('#newBlogCategory').addClass('active');
@stop

