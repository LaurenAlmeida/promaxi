@extends('site.app')

@section('content')
    @include('site.home.services')
    @include('site.home.core_features')
    @include('site.home.doctor')
    @include('site.home.review')
    @include('site.home.blog')
@endsection
