@extends('adminpanel.layout')
@section('pageTitle')
    ویرایش شبکه اجتماعی
@stop

@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ویرایش شبکه اجتماعی</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard.socialMedia.index')}}">شبکه اجتماعی</a>
                        </li>
                        <li class="breadcrumb-item active">ویرایش شبکه اجتماعی</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="col-sm-12">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger col-sm-9">
                <li>{{$error}}</li>
            </div>
        @endforeach
    </div>
    <!---------card header------>
    <div class="card">
        <div class="card-header">
            <div class="card-title">مشخصات شبکه اجتماعی</div>
        </div>
        <!-----------card body ------->
        <div class="card-body">
            <form action="{{route('dashboard.socialMedia.update' , $media->id )}}" role="form" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-----------category------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام شبکه اجتماعی</lable>
                            <input type="text" class="form-control" name="title" value="{{$media->title}}">
                        </div>
                    </div>  <!-----------category------------->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <lable> نام شبکه اجتماعی</lable>
                            <input type="text" class="form-control" name="address" value="{{$media->address}}">
                        </div>
                    </div>
                    <!---------------image-------------->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <lable for="icon"> عکس شبکه اجتماعی</lable>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="icon">
                                </div>
                            </div>
                        </div>

                        @if($media->icon != null && $media->icon != '')
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="icon">عکس قبلی شبکه اجتماعی</label>
                                    <img name="icon" style="width: 50%"
                                         src="{{ url('') }}{{ $media->icon }}"
                                         alt="{{ $media->title }}">
                                </div>
                            </div>
                        @else
                            <div class="col-md-4 col-sm-12">
                                <label for="icon">عکس قبلی شبکه اجتماعی: </label>
                                <span class="text-danger mr-1">بدون تصویر</span>
                            </div>
                        @endif
                    </div>
                    <!----------------sumit Button  ---------->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="ذخیره">
                            <a class="btn btn-danger" href="{{ route('dashboard.socialMedia.index') }}">لغو عملیات</a>
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

        $('#medias').addClass('menu-open');
        $('#medias> a').addClass('active');
        $('#newmedia').addClass('active');


    </script>
@stop

