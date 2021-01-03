@extends('adminpanel.layout')

@section('pageTitle')
    نظرات کاربران سایت
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه نظرات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">نظرات</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    {{--    mainContent--}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if(session('message'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-danger col-sm-3">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">نظرات</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\Comment::all()->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام کاربر</th>
                                        <th>دسته بندی نظرات</th>
                                        <th>نظرات</th>
                                        <th>تاریخ ثبت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allComments as $comment)
                                        <tr>
                                            <td>{{$comment->id}}</td>
                                            <td>{{$comment->user->name}}</td>
                                            <td>{{$comment->commentType($comment->commentable_type)}}
                                                    /<a target="_blank" href="{{$comment->commentable->path()}}">بازدید</a>
                                            </td>
                                            <td>{{$comment->comment_body}}</td>
                                            <td>{{$comment->diffForHumans($comment->created_at)}}</td>
                                            <td>
                                                <a href="{{route('dashboard.comments.destroy2' , $comment->id)}}"><i
                                                        class="fa fa-trash-o text-danger"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                   {!! $allComments->links() !!}
                                </table>
                            @else
                                <h4>نظری در سایت موجود نیست</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@stop

@section('footerScripts')
    {{--    dataTables--}}
    <script src="{{url('adminPanel/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('adminPanel/plugins/datatables/dataTables.bootstrap4.js')}}"></script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#comments').addClass('menu-open');
        $('#comments> a').addClass('active');
        $('#allcomments').addClass('active');


    </script>
@stop

