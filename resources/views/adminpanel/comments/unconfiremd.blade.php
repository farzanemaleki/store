@extends('adminpanel.layout')

@section('pageTitle')
    نظرات تایید نشده
@stop
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه نظرات تایید نشده </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">نظرات تایید نشده</li>
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
                        <div class="alert alert-success col-sm-12">
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-warning col-sm-12">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">نظرات تایید نشده</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if($allUnConfirmedComments->count() > 0)
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
                                    @foreach($allUnConfirmedComments as $comment)
                                        <tr>
                                            <td>{{$comment->id}}</td>
                                            <td>{{$comment->user->name}}</td>
                                            <td>{{$comment->commentType($comment->commentable_type)}}</td>
                                            <td>{{$comment->comment_body}}</td>
                                            <td>{{$comment->diffForHumans($comment->created_at)}}</td>
                                            <td>
                                                <a href="{{route('dashboard.comments.confirmed', $comment->id)}}" style="color: greenyellow"><i
                                                        class="fa fa-check m-2"></i></a>
                                                <a href="{{route('dashboard.comments.unconfirmed.destroy' , $comment->id)}}"><i
                                                        class="fa fa-trash-o text-danger"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                    {!! $allUnConfirmedComments->links() !!}
                                </table>
                            @else
                                <h4>نظر تایید نشده در سایت موجود نیست</h4>
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
        $('#allunconfirmed').addClass('active');


    </script>
@stop

