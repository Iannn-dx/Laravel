<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Blog;

Route::get('/', function () {
    // $job = Job::all();

    // dd($job[0]->salary);

    return view('home');
});

Route::get('/jobs', function () {
    // return 'About page';
    // return ['foo' => 'bar'];
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // dd($id);
    $job = Job::find($id);

    
    // dd($job);
    return view('job', ['job' => $job]);
});


// homework 1
Route::get('/contact', function () {
    return view('contact');
});


// blogs

Route::get('/blogs', function () {
     return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/{id}', function ($id) {
    $blog = Blog::find($id);

    return view('blog', ['blog' => $blog]);
});
