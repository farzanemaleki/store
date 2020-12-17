@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش ویژگی
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش ویژگی</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">ویرایش ویژگی </li>
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
            <div class="card-title">مشخصات ویژگی</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.productAttribiutes.store')}}" role="form" method="post" >
                @csrf
                <div class="row">
                    {{--                    <-----------product_id------------->--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام محصول</lable>
                            <input disabled type="text" class="form-control" name="key" value="{{ $Atrr->product_name($Atrr->product_id) }}">
                        </div>
                    </div>

                    {{--                    //--------key--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable>عنوان ویژگی</lable>
                            <input type="text" class="form-control" name="key" value="{{ $Atrr->key }}">
                        </div>
                    </div>
                    {{--                    //--------value--}}
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable>مقدار ویژگی</lable>
                            <input type="text" class="form-control" name="value" value="{{ $Atrr->value }}">
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
