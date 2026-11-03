@extends('frontend.layouts.master')
@section('title', 'The Boss Media | Performance Marketing & Web Development Company')
@section('meta_description', 'The Boss Media is a digital solutions company in Mohali offering performance marketing,
    SEO & AEO, website development, CRM and WhatsApp API. Get a free quote. ')
@section('canonical', 'https://thebossmedia.co.in/')
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
