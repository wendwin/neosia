@extends('components.layout')

@section('content')
    <div class="">
        @include('components.course.hero')
        @include('components.course.exploreCourse')
        @include('components.course.categories')
        @include('components.course.all')
    </div>
@endsection