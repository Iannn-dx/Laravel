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
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
   return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    // dd($id);
    $job = Job::find($id);

    
    // dd($job);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    // dd(request()->all()); and skipping validation

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('jobs');
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

// Route::get('/blogs/{id}', function ($id) {
//     $blog = Blog::find($id);

//     return view('blog', ['blog' => $blog]);
// });
