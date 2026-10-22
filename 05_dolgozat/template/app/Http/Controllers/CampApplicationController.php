<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampApplicationRequest;
use App\Models\CampApplication;
use Illuminate\Http\Request;

class CampApplicationController extends Controller
{
    public function index()
    {
        $camp_applications = CampApplication::all();

        return view(
            'index',
            [
                'camp_session' => CampApplication::SESSIONS,
                'accomodation' => CampApplication::ACCOMMODATIONS,
                'camp_applications' => $camp_applications
            ]
        );
    }

    public function store(StoreCampApplicationRequest $request)
    {
        CampApplication::create($request->validated());
        //dd($request);
        return redirect()->route('camp-applications.index');
    }
}
