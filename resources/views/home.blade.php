@extends('master')

@section('title')Lightning Road 
@endsection <!--end of title section-->	

@section('content')

    @include('pages.landing')
    @include('pages.about')
    @include('pages.what')
    @include('pages.mission')
    {{-- @include('pages.contact') --}}
    @include('pages.gallery')					



 @endsection {{-- end of content--}}