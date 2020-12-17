@extends('adminpanel.layout')
@section('pageTitle')
    افزودن ویژگی جدید
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن ویژگی جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">ویژگی جدید</li>
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
            <div class="card-title">مشخصات ویژگی جدید</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.productAttribiutes.store')}}" role="form" method="post" >
                @csrf
                <div class="row">
                    {{--                    <-----------product_id------------->--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> انتخاب محصول</lable>
                            <select class="form-control" name="product_id">
                                <option value=""><span class=" text-darkwhite">انتخاب محصول...</span></option>
                                @foreach($allProduct as $pro)
                                <option value="{{$pro->id}}">{{$pro->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{--                    //--------key--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable>عنوان ویژگی</lable>
                            <input type="text" class="form-control" name="key"
                                   placeholder="نام ویژگی را وارد کنید ..." value="{{old('key')}}">
                        </div>
                    </div>
                    {{--                    //--------value--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable>مقدار ویژگی</lable>
                            <input type="text" class="form-control" name="value"
                                   placeholder="مقدار ویژگی را وارد کنید ..." value="{{old('value')}}">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard') }}">لغو عملیات</a>
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

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#attribiutes').addClass('menu-open');
        $('#attribiutes> a').addClass('active');
        $('#newAttr').addClass('active');


    </script>
@stop
