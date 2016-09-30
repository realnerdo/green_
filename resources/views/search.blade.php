@extends('layout.base')

@section('title', 'Green Store - Search')

@section('topbar')
    @include('layout.topbar')
@endsection

@section('content')
    <div class="wrapper">
        <div class="col-3">
            @include('layout.filters')
        </div><!-- end col-3 -->
        <div class="col-9">
            @include('layout.results')
        </div><!-- end col-9 -->
    </div><!-- end wrapper -->
@endsection

@section('footer')
    @include('layout.footer')
@endsection
