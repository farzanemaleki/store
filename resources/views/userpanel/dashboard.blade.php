@extends('layouts.app');

@section('content')
    @auth()
       <h1 class="text-right"> {{ Auth::user()->name . ' '}}خوش آمدید  </h1>
    @else
        نام کاربری
    @endauth
@stop
