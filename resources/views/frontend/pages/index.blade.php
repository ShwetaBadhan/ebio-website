@extends('frontend.layouts.master')
@section('title', 'Home Page | Ebio-Cares')
@section('content')

@include('frontend.components.home.hero')
@include('frontend.components.home.services')
@include('frontend.components.home.why-choose-us')
@include('frontend.components.home.who-we-are')
@include('frontend.components.home.stats')
@include('frontend.components.home.achievements')
@include('frontend.components.home.testimonials')
@include('frontend.components.home.team')
{{-- @include('frontend.components.home.book-form') --}}
@include('frontend.components.home.blogs')
{{-- @include('frontend.components.home.cta') --}}

@endsection