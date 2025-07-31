@extends('components.layout')

@section('content')
    <div class="">
        @include('components.landingpage.hero')
        @include('components.landingpage.infobar')
        @include('components.landingpage.brand')
        @include('components.landingpage.why')
        @include('components.landingpage.client')
        @include('components.landingpage.program')
        @include('components.landingpage.team')
        @include('components.landingpage.event')
        @include('components.landingpage.comment')
        @include('components.landingpage.news')
    </div>
@endsection