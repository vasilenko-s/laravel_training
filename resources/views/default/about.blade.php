@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
    <div class="jumbotron">

     @foreach($result as $item)

            <h2>{{ $item->title }}</h2>
            {{ $item->content }}

     @endforeach

    </div>
@endsection