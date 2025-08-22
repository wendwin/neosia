@extends('components.layout')

@section('content')
    <div class="">
        @include('components.courseDetail.detail')
        {{-- @include('components.course.featured')
        @include('components.course.exploreCourse')
        @include('components.course.categories')
        @include('components.course.all') --}}
        @include('components.question')
    </div>
@endsection