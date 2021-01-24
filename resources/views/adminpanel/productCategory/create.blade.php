@extends('adminpanel.layout')
@section('pageTitle')
    افزودن دسته بندی محصولات
@stop

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
    <!---------card header------>
    <div class="card">
        <div class="card-header">
            <div class="card-title">مشخصات دسته بندی جدید</div>
        </div>

        <!-----------card body ------->
        <div class="card-body">
            <form action="{{route('dashboard.productCategory.store')}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-----------category------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام دسته بندی</lable>
                            <input type="text" class="form-control" name="title"
                                   placeholder="نام دسته بندی را وارد کنید ..." value="{{old('title')}}">
                        </div>
                    </div>
                    <!------------------parent_id----------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> انتخاب شاخه دسته بندی</lable>
                            <select class="form-control" name="parent_id">
                                <option value=""><span class=" text-darkwhite">انتخاب شاخه دسته بندی...</span></option>
                                <option value="0">دسته بندی مادر</option>
                                @foreach($allcategories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!---------------image-------------->
                    <div class="col-sm-4">
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
                    <!-----------status------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> وضعیت نمایش دسته بندی</lable>
                            <select class="form-control" name="status">
                                <option value=""><span class=" text-darkwhite">انتخاب وضعیت دسته بندی...</span></option>
                                <option value="0">پیش نویس</option>
                                <option value="1">انتشار</option>
                            </select>
                        </div>
                    </div>
                    <!----------description-------------->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <lable> توضیحات دسته بندی</lable>
                            <textarea rows="5" class="form-control" name="description"
                                      placeholder="توضیحات دسته بندی را وارد کنید ..."></textarea>
                        </div>
                    </div>
                    <!----------------sumit Button  ---------->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.productCategory.index') }}">لغو عملیات</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



@stop


@section('footerScripts')
    {{--    dataTables--}}
    <script src="{{url('adminPanel/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('adminPanel/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ url('adminPanel/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ url('adminPanel/plugins/ckeditor/ckeditor.js') }}"></script>

    <script !src="">

        CKEDITOR.replace('description', {
            filebrowserUploadMethod : 'form',
            filebrowserUploadUrl: '/dashboard/productCategory/save_image',
            filebrowserImageUploadUrl: '/dashboard/productCategory/save_image',

        });
    </script>
    <script !src="">
        $('.nav-link').removeClass('active');

        $('#categories').addClass('menu-open');
        $('#categories> a').addClass('active');
        $('#new-Category').addClass('active');


    </script>
@stop

