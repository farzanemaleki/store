@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش دسته بندی محصولات
@stop

@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش دسته بندی جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.productCategory.index')}}">دسته بندی</a></li>
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
    <!---------card header------>
    <div class="card">
        <div class="card-header">
            <div class="card-title">مشخصات دسته بندی</div>
        </div>
        <!-----------card body ------->
        <div class="card-body">
            <form action="{{route('dashboard.productCategory.update' , $productcategory->id )}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-----------category------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام دسته بندی</lable>
                            <input type="text" class="form-control" name="title" value="{{$productcategory->title}}">
                        </div>
                    </div>
                    <!------------------parent_id----------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> انتخاب دسته بندی</lable>
                            <select class="form-control js-example-basic-single" name="parent_id">
                                <option value="0">دسته بندی مادر </option>
                                @foreach($allcategories as $category)

                                    @if($category->id == $productcategory->parent_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!---------------image-------------->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <lable for="image"> عکس دسته بندی</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <lable class="custom-file-label" for="image ">{{ url('') }}{{ $productcategory->image }}</lable>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($productcategory->image != null && $productcategory->image != '')
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="thumbnail">عکس قبلی دسته بندی</label>
                                <img name="thumbnail" style="width: 100%" src="{{ url('') }}{{ $productcategory->image }}"
                                     alt="{{ $productcategory->title }}">
                            </div>
                        </div>
                    @else
                        <div class="col-md-4 col-sm-12">
                            <label for="thumbnail">عکس قبلی دسته بندی: </label>
                            <span class="text-danger mr-1">بدون تصویر</span>
                        </div>
                @endif
                    <!-----------status------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> وضعیت نمایش دسته بندی</lable>
                            <select class="form-control" name="status">
                                @if($productcategory->status == 0)
                                    <option value="0" selected >پیش نویس</option>
                                    <option value="1" >انتشار</option>
                                @else
                                    <option value="0">پیش نویس</option>
                                    <option value="1" selected >انتشار</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <!----------description-------------->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <lable> توضیحات دسته بندی</lable>
                            <textarea rows="5" class="form-control" name="description">{{$productcategory->description}}</textarea>
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

