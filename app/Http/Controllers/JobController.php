<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class JobController extends Controller
{
    public Function index(){
        $jobs = Job::with('employer')->latest()->paginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(Job $job){
        return view('jobs.show', ['job' => $job]);
    }

    public function store(){
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
    }

    public function edit(Job $job){
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job){
        // authorize
        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // persist
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // redirect
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job){
        //authorize
        // delete
        $job->delete();
        // redirect
        return redirect('/jobs/');
        }
}
