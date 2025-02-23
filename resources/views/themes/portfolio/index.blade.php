@extends('themes.portfolio.layout.app')

@section('content')
    @include('themes.portfolio.component.about')
    @include('themes.portfolio.component.skills')
    @include('themes.portfolio.component.education')
    @include('themes.portfolio.component.portfolio')
    @include('themes.portfolio.component.casestudy')
    @include('themes.portfolio.component.testimonial')
@endsection
