@extends('adminpanel.layout')
@section('pageTitle')
    داشبورد
@endsection
@section('mainContent')
    محتوای صفحه داشبورد
    @stop

@section('footerScripts')
    <script>
        $('.nav-link').removeClass('active');

        $('#dashboard').addClass('active');
        $('#dashboard> a').addClass('active');

    </script>
@stop
