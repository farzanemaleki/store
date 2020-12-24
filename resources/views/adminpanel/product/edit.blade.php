@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش محصول
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش محصول </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">ویرایش</li>
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
            <div class="card-title">مشخصات محصول</div>
        </div>

        <!-----------card body ------->
        <div class="card-body">
            <form action="{{route('dashboard.product.update' , $product->id )}}" role="form" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{--                    //--------product--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام محصول</lable>
                            <input type="text" class="form-control" name="title"
                                   placeholder="نام محصول را وارد کنید ..." value="{{$product->title}}">
                        </div>
                    </div>
                    {{--                    //--------category--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> دسته بندی محصول</lable>
                            <select class="form-control" name="category">
                                <option value=""><span class=" text-darkwhite">انتخاب دسته بندی محصول...</span></option>
                                <option value="0">دسته بندی نشده ها</option>
                                @foreach($allcategories as $category)
                                    @if($product->category == $category->id)
                                        <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{--                    //------------------price--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> قیمت محصول بدون تخفیف به ریال</lable>
                            <input type="number" class="form-control" name="price"
                                   placeholder="قیمت محصول را وارد کنید ..." value="{{$product->price}}">
                        </div>
                    </div>
                    {{--                          //------------------old price --}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> قیمت محصول با تخفیف به ریال</lable>
                            <input type="number" class="form-control" name="old_price"
                                   placeholder="قیمت محصول را وارد کنید ..." value="{{$product->old_price}}">
                        </div>
                    </div>
                    {{--                    //------------------product_id --}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> کد محصول</lable>
                            <input type="text" class="form-control" name="product_id" disabled
                                   placeholder="کد محصول را وارد کنید ..." value="{{$product->product_id}}">
                        </div>
                    </div>
                    {{--                    <-------image---->--}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <lable for="image"> عکس محصول</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <lable class="custom-file-label" for="image ">{{ url('') }}{{ $product->image }}</lable>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($product->image != null && $product->image != '')
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="thumbnail">عکس قبلی محصول:</label>
                                <img name="thumbnail" style="width: 100%" src="{{ url('') }}{{ $product->image }}"
                                     alt="{{ $product->title }}">
                            </div>
                        </div>
                    @else
                        <div class="col-md-4 col-sm-12">
                            <label for="thumbnail">عکس قبلی محصول: </label>
                            <span class="text-danger mr-1">بدون تصویر</span>
                        </div>
                    @endif
                    {{--                    <-----------discount-------------}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> درصد تخفیف محصول</lable>
                            <input type="text" class="form-control" name="discount"
                                   placeholder="درصد تخفیف محصول را وارد کنید ..." value="{{$product->discount}}">
                        </div>
                    </div>
                    {{--                    <------------count --------------}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> تعداد محصول</lable>
                            <input type="number" class="form-control" name="count"
                                   placeholder="تعداد محصول را وارد کنید ..." value="{{$product->count}}">
                        </div>
                    </div>
                    {{--                    <---------size------------>--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> سایز محصول</lable>
                            <input type="text" class="form-control" name="size"
                                   placeholder="سایز محصول را وارد کنید ..." value="{{$product->size}}">
                        </div>
                    </div>
                    {{--                    <-----------weight------------->--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> وزن محصول</lable>
                            <input type="text" class="form-control" name="weight"
                                   placeholder="وزن محصول را وارد کنید ..." value="{{$product->weight}}">
                        </div>
                    </div>
                    {{--                    <-----------status------------->--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> وضعیت نمایش محصول</lable>
                            <select class="form-control" name="status">
                                <option value=""><span class=" text-darkwhite">انتخاب وضعیت محصول...</span></option>
                                @if($product->status == 0)
                                    <option value="0" selected>پیش نویس</option>
                                    <option value="1" >انتشار</option>
                                @else
                                    <option value="0" >پیش نویس</option>
                                    <option value="1" selected>انتشار</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    {{--                    <----------description--------------}}
                    <div class="col-sm-12">
                        <div class="form-group">
                            <lable> توضیحات محصول</lable>
                            <textarea rows="5" class="form-control" name="description"
                                      placeholder="توضیحات محصول را وارد کنید ...">{!! $product->description !!}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.product.index') }}">لغو عملیات</a>
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
            filebrowserUploadUrl: '/dashboard/products/save_image',
            filebrowserImageUploadUrl: '/dashboard/products/save_image',
        });
    </script>
    <script !src="">
        $('.nav-link').removeClass('active');

        $('#products').addClass('menu-open');
        $('#products> a').addClass('active');
        $('#new-products').addClass('active');
    </script>
@stop
