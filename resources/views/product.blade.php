@extends('layout.base')

@section('title', 'Green Store - Product')

@section('topbar')
    @include('layout.topbar')
@endsection

@section('content')
    <div class="wrapper">
        @include('layout.breadcrums')
        <div id="product">
            <div class="row">
                @include('layout.gallery')
                @include('layout.information')
            </div><!-- end row -->
            <div class="row">
                @include('layout.reviews')
                @include('layout.questions')
            </div><!-- end row -->
        </div><!-- end product -->
        @include('layout.related')
    </div><!-- end wrapper -->
@endsection

@section('footer')
    @include('layout.footer')
@endsection
