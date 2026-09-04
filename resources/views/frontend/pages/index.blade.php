@extends('frontend.layouts.master')
@section('title','Home | The Boss Media')
@section('content')

@include('frontend.components.home.hero')
@include('frontend.components.home.about')
@include('frontend.components.home.counter')
@include('frontend.components.home.services')
@include('frontend.components.home.work')
@include('frontend.components.home.choose')
@include('frontend.components.home.industries')
@include('frontend.components.home.projects')
@include('frontend.components.home.testimonials')
@include('frontend.components.home.blogs')
@include('frontend.components.home.faqs')
@include('frontend.components.home.marquee')



@endsection