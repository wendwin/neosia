<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/course', function () {
    $categories = [];
    for ($i = 1; $i <= 10; $i++) {
        $categories[] = [
            "title" => "Category $i",
        ];
    }
    
    $courses = [];
    for ($i = 1; $i <= 9; $i++) {
        $courses[] = [
            "title" => "Course Title Goes Here $i",
            "description" => "This is the course description lorem ipsum dolor sit amet consectetur adispisicing elit",
            "instructor" => "Alex Exelson",
            "price" => "900000 ",
            "image" => "img/course/course.png",
            "imgProfile" => "img/team/profile.png",
        ];
    }

    return view('course', compact('courses', 'categories'));
})->name('course');