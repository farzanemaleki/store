@extends('adminpanel.layout')
@section('pageTitle')
    همه لینک ها
@endsection
@section('mainContent')
    <!-- .content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه لینک ها</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">داشبورد</a></li>
                        <li class="breadcrumb-item active">لینک ها</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if(session('message'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('error'))
                        <div class="alert alert-danger col-sm-3">
                            <li>{{Session::get('error')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-warning col-sm-3">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-right">جدول لینک ها</h3>
                        </div>

                        {{--card header--}}
                        <div class="card-body">
                            @if(\App\Link::all()->count() > 0)
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>تیتر لینک</th>
                                            <th>لینک 1</th>
                                            <th>لینک 2</th>
                                            <th>لینک 3</th>
                                            <th>لینک 4</th>
                                            <th>لینک 5</th>
                                            <th>ویرایش</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($links as $link)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $link->title }}</td>
                                                <td>{{ $link->link1 }}</td>
                                                <td>{{ $link->link2 }}</td>
                                                <td>{{ $link->link3 }}</td>
                                                <td>{{ $link->link4 }}</td>
                                                <td>{{ $link->link5 }}</td>
                                                <td><a href="{{route('dashboard.link.edit', $link->id)}}"><i class="fa fa-pencil m-2" ></i></a>
                                                </td>

                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

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
