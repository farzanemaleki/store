@extends('adminpanel.layout')
@section('pageTitle')
    داشبورد
@endsection
<<<<<<< HEAD
@section('headerStyles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

@endsection
=======
>>>>>>> c0a5a9f384955196b200fb275c7a0c937da3cd41
@section('mainContent')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">داشبورد</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active">داشبورد</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$Members}}</h3>

                            <p>تعداد کاربران</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('dashboard.members.index')}}" class="small-box-footer"> <i class="fas fa-arrow-right"></i> همه کاربران </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('footerScripts')
    <script>
        $('.nav-link').removeClass('active');

        $('#dashboard').addClass('active');
        $('#dashboard> a').addClass('active');

    </script>
@stop
