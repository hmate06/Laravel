<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobApplicationRequest;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function index()
    {
        $jobs = JobApplication::all(); // összes rekord

        return view(
            'home',
            [
                'positions' => JobApplication::POSITION,
                'jobs' => $jobs
            ]
        );
    }

    public function store(StoreJobApplicationRequest $request)
    {
        JobApplication::create($request->safe()->except('consent'));
        //dd($request);
        return redirect()->route('jobs.index');
    }
}
