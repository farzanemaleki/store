@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش دسته بندی
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش دسته بندی</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.blogCategory.index')}}">دسته بندی ها</a></li>
                        <li class="breadcrumb-item active">ویرایش دسته بندی</li>
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
            <div class="card-title">مشخصات دسته بندی</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.blogCategory.update' , $blogcategory->id)}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-------------------topic---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> نام دسته بندی</lable>
                            <input type="text" class="form-control" name="topic" value="{{$blogcategory->topic}}" />
                        </div>
                    </div>
                    <!-------------------slug---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>اسلاگ دسته بندی</lable>
                            <input class="form-control" id="tags" name="tags" value="{{$blogcategory->slug}}" />
                        </div>
                    </div>
                    <!-------------------parent_id---------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> انتخاب دسته بندی</lable>
                            <select class="form-control js-example-basic-single" name="parent_id">
                                <option value="0">دسته بندی مادر</option>
                                @foreach($allBlogCategory as $category)
                                    @if($category->id == $blogcategory->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->topic }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->topic }}</option>
                                    @endif
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
                                    <lable class="custom-file-label" for="image ">انتخاب عکس</lable>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($blogcategory->image != null && $blogcategory->image != '')
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="thumbnail">عکس قبلی دسته بندی</label>
                                <img name="thumbnail" style="width: 100%" src="{{ url('') }}{{ $blogcategory->image }}"
                                     alt="{{ $blogcategory->topic }}">
                            </div>
                        </div>
                    @else
                        <div class="col-md-4 col-sm-12">
                            <label for="thumbnail">عکس قبلی دسته بندی: </label>
                            <span class="text-danger mr-1">بدون تصویر</span>
                        </div>
                @endif
                    <!-------------------status---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> وضعیت نمایش دسته بندی</lable>
                            <select class="form-control" name="status">
                                @if($blogcategory->status == 0)
                                <option value="0" selected>پیش نویس</option>
                                <option value="1">انتشار</option>
                                @else
                                <option value="0" >پیش نویس</option>
                                <option value="1" selected>انتشار</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <!-------------------body---------------->
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <lable>توضیح کوتاه دسته بندی</lable>
                            <textarea rows="2" class="form-control" id="body" name="body">{{$blogcategory->body}}</textarea>
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


