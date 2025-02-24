@extends('themes.portfolio.layout.app')

@section('content')
    @include('themes.portfolio.component.about')
    @include('themes.portfolio.component.skills')
    @include('themes.portfolio.component.education')
    @if ($projects->count() > 0)
        @include('themes.portfolio.component.portfolio', ['projects' => $projects])
    @endif

    @if ($casestudies->count() > 0)
        @include('themes.portfolio.component.casestudy', ['casestudies' => $casestudies])
    @endif
    @include('themes.portfolio.component.testimonial')
@endsection
