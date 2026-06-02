<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Blog;

Route::get('/', function () {
    // $job = Job::all();

    // dd($job[0]->salary);

    return view('home');
});

// index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// show
Route::get('/jobs/{id}', function ($id) {
    // dd($id);
    $job = Job::find($id);

    // dd($job);
    return view('jobs.show', ['job' => $job]);
});

// store in the db
Route::post('/jobs', function () {
    // dd(request()->all()); and skipping validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('jobs');
});
// edit
Route::get('/jobs/{id}/edit', function ($id) {
    // dd($id);
    $job = Job::find($id);

    // dd($job);
    return view('jobs.edit', ['job' => $job]);
});

// udpate
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    // authorize

    // update job
    $job = Job::findOrFail($id);

    // persist
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect
    return redirect('/jobs/' . $job->id);
});

// destroy
Route::delete('/jobs/{id}', function ($id) {
    //authorize
    // delete
    Job::findOrFail($id)->delete();
    // redirect
    return redirect('/jobs/');
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
