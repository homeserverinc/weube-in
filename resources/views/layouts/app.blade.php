@extends('layouts.base')

@section('head')
    @yield('head_includes')
@endsection
@section('body')
    <div id="app">  
    @yield('content')
    </div>
    @yield('content-no-app')
@endsection