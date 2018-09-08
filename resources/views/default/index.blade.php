@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent

    <div class="sidebar-module">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, error illo illum ipsa modi neque nesciunt porro sequi? Asperiores dignissimos eligendi explicabo laboriosam minus nesciunt optio quod tempora temporibus voluptates?</p>
    </div>

@endsection

@section('content')
    @include('default.content')
@endsection
