<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);

Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

// Route::get('/blogs/{id}', function ($id) {
//     $blog = Blog::find($id);

//     return view('blog', ['blog' => $blog);
// });
