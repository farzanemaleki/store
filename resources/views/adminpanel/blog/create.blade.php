@extends('adminpanel.layout')
@section('pageTitle')
    افزودن نوشته جدید
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن نوشته جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">نوشته جدید</li>
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
            <div class="card-title">مشخصات نوشته جدید</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.blog.store')}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-------------------topic---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> عنوان نوشته</lable>
                            <input type="text" class="form-control" name="topic" placeholder="نام نوشته خود را وارد کنید ..." value="{{old('topic')}}">
                        </div>
                    </div>
                    <!-------------------tags---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable>تگ های نوشته</lable>
                            <input class="form-control" id="tags" name="tags" placeholder="تگ نوشته را وارد کنید ..." />
                        </div>
                    </div>
                    <!-------------------category---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable> دسته بندی نوشته</lable>
                            <select class="form-control" name="category">
                                <option value=""><span class=" text-darkwhite">انتخاب دسته بندی نوشته...</span></option>
                                @foreach($allBlogCategory as $category)
                                    <option value="{{$category->id}}">{{$category->topic}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-------------------image---------------->
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <lable for="image"> عکس نوشته</lable>
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
                            <lable> وضعیت نمایش محصول</lable>
                            <select class="form-control" name="status">
                                <option value=""><span class=" text-darkwhite">انتخاب وضعیت محصول...</span></option>
                                <option value="0">پیش نویس</option>
                                <option value="1">انتشار</option>
                            </select>
                        </div>
                    </div>
                    <!-------------------body---------------->
                    <div class="col-sm-12 col-md-8">
                        <div class="form-group">
                            <lable>توضیح کوتاه نوشته</lable>
                            <textarea rows="2" class="form-control" id="body" name="body" placeholder="توضیح کوتاه نوشته را وارد کنید ..."></textarea>
                        </div>
                    </div>
                    <!-------------------description---------------->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <lable> توضیحات محصول</lable>
                            <textarea rows="10" class="form-control" id="description" name="description"
                                      placeholder="توضیحات محصول را وارد کنید ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.blog.index') }}">لغو عملیات</a>
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

        CKEDITOR.replace('description', {
            filebrowserUploadMethod : 'form',
            filebrowserUploadUrl: '/dashboard/save_blog_image',
            filebrowserImageUploadUrl: '/dashboard/save_blog_image',

        });

    </script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#blogs').addClass('menu-open');
        $('#blogs> a').addClass('active');
        $('#newblog').addClass('active');
    </script>
@stop

