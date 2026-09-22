@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold mb-3">Események</h1>
        <a class="px-4 py-2 bg-blue-600 text-white text-sm rounded-2xl"
         href="{{ route('events.create') }}">+ Új rendezvény</a>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($events as $event)
            <div class="bg-white round-lg shadow flex flex-col p-6" >
                <h2 class="text-lg font-semibol mb-2">{{ $event->title }}</h2>
                <p class="text-gray-600 text-sm flex-1">{{ $event->description }}</p>
                <p class="text-blue-600 text-sm mt-4">
                    {{ $event->event_date->format('Y-m-d H:i') }}
                </p>
            </div>
        @empty
            <p class="text-gray-500">Jelenleg nincsenek események.</p>
        @endforelse
    </div>
@endsection
