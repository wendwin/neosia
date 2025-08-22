@extends('components.layout')

@section('content')
    <div class="">
        @include('components.servicePage.hero')
        @include('components.servicePage.serviceInfo')
        @include('components.servicePage.industry')
        @include('components.question')
    </div>
@endsection