@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش لینک ها
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش لینک</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.blog.index')}}">لینک ها</a></li>
                        <li class="breadcrumb-item active">ویرایش لینک</li>
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
            <div class="card-title">مشخصات لینک</div>
        </div>

        {{--    <-----------card body ------->--}}
        <div class="card-body">
            <form action="{{route('dashboard.link.update' , $link->id)}}" role="form" method="post">
                @csrf
                <div class="row">

                    <!-------------------title---------------->
                    <div class="col-sm-12 col-md-8">
                        <div class="form-group">
                            <lable> عنوان لینک</lable>
                            <input type="text" class="form-control" name="title" value="{{$link->title}}">
                        </div>
                    </div>
                    <!-------------------link 1---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable> لینک 1 </lable>
                            <input type="text" class="form-control" name="link1"  value="{{$link->link1}}">
                        </div>
                    </div>
                    <!-------------------Address_link1---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable>آدرس لینک 1 </lable>
                            <input type="text" class="form-control" name="Address_link1"  value="{{$link->Address_link1}}">
                        </div>
                    </div>
                    <!-------------------link 2---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable>لینک 2</lable>
                            <input type="text" class="form-control" name="link2"  value="{{$link->link2}}">
                        </div>
                    </div>
                    <!-------------------Address_link2---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable>آدرس لینک 2 </lable>
                            <input type="text" class="form-control" name="Address_link2"  value="{{$link->Address_link2}}">
                        </div>
                    </div>
                    <!-------------------link 3---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable> لینک 3</lable>
                            <input type="text" class="form-control" name="link3"  value="{{$link->link3}}">
                        </div>
                    </div>
                    <!-------------------Address_link3---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable>آدرس لینک 3 </lable>
                            <input type="text" class="form-control" name="Address_link3"  value="{{$link->Address_link3}}">
                        </div>
                    </div>
                    <!-------------------link 4---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable> لینک 4</lable>
                            <input type="text" class="form-control" name="link4" value="{{$link->link4}}">
                        </div>
                    </div>
                    <!-------------------Address_link4---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable>آدرس لینک 4 </lable>
                            <input type="text" class="form-control" name="Address_link4"  value="{{$link->Address_link4}}">
                        </div>
                    </div>
                    <!-------------------link 5---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable>لینک 5</lable>
                            <input type="text" class="form-control" name="link5"  value="{{$link->link5}}">
                        </div>
                    </div>
                    <!-------------------Address_link5---------------->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <lable>آدرس لینک 5 </lable>
                            <input type="text" class="form-control" name="Address_link5"  value="{{$link->Address_link5}}">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.link.index') }}">لغو عملیات</a>
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

        $('#links').addClass('menu-open');
        $('#links> a').addClass('active');
        $('#allLinks').addClass('active');


    </script>
@stop

