@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش نماد الکترونیک
@stop

@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش نماد الکترونیک</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.elecSymbol.index')}}">نماد الکترونیک</a>
                        </li>
                        <li class="breadcrumb-item active">ویرایش نماد</li>
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
            <div class="card-title">مشخصات نماد</div>
        </div>
        <!-----------card body ------->
        <div class="card-body">
            <form action="{{route('dashboard.elecSymbol.update' , $symbol->id )}}" role="form" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-----------category------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام نماد</lable>
                            <input type="text" class="form-control" name="title" value="{{$symbol->title}}">
                        </div>
                    </div>
                    <!---------------image-------------->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <lable for="electrical_symbol"> عکس نماد</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="electrical_symbol">
                                </div>
                            </div>
                        </div>

                        @if($symbol->electrical_symbol != null && $symbol->electrical_symbol != '')
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="electrical_symbol">عکس قبلی نماد</label>
                                    <img name="electrical_symbol" style="width: 100%"
                                         src="{{ url('') }}{{ $symbol->electrical_symbol }}"
                                         alt="{{ $symbol->title }}">
                                </div>
                            </div>
                        @else
                            <div class="col-md-4 col-sm-12">
                                <label for="electrical_symbol">عکس قبلی نماد: </label>
                                <span class="text-danger mr-1">بدون تصویر</span>
                            </div>
                        @endif
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

