@extends('components.layout')

@section('content')
    <div class="">
        @include('components.servicePage.hero')
        @include('components.servicePage.serviceInfo')
        @include('components.question')
    </div>
@endsection