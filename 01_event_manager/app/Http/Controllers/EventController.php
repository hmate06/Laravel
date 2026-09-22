<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // $events = Event::all();
        $events = Event::orderBy('event_date')->get();
        // dd($events);
        return view('events.index', [
            'events' => $events,
        ]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(StoreEventRequest $request){

    
        return "ok";
    }
}
