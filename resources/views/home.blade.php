@extends('layout.base')

@section('title', 'Green Store - Welcome')

@section('topbar')
    @include('layout.topbar')
@endsection

@section('content')
    @include('layout.banner')
    @include('layout.newest')
    @include('layout.stripe')
@endsection

@section('footer')
    @include('layout.footer')
@endsection
