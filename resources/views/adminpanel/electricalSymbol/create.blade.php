@extends('adminpanel.layout')
@section('pageTitle')
    افزودن نماد الکترونیک
@stop

@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن نماد جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">نماد جدید</li>
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
            <div class="card-title">مشخصات نماد جدید</div>
        </div>

        <!-----------card body ------->
        <div class="card-body">
            <form action="{{route('dashboard.elecSymbol.store')}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-----------title------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام نماد</lable>
                            <input type="text" class="form-control" name="title"
                                   placeholder="نام نماد را وارد کنید ..." value="{{old('title')}}">
                        </div>
                    </div>
                    <!---------------image-------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable for="electrical_symbol">تصویر نماد</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="electrical_symbol">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------sumit Button  ---------->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.elecSymbol.index') }}">لغو عملیات</a>
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

        $('#Elecs').addClass('menu-open');
        $('#Elecs> a').addClass('active');
        $('#newElecs').addClass('active');


    </script>
@stop

