<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // $events = Event::all();
        $events = Event::orderBy('event_date', 'asc')->get();
        // dd($events);
        return view('events',['events' => $events]);

    }
}
