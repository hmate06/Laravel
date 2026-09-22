@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold">Események</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($events as $event)
            <div class="bg-white round-lg shadow flex flex-col p-6" >
                <h2 class="text-lg font-semibol mb-2">{{ $event->title }}</h2>
                <p class="text-gray-600 text-sm flex-1">{{ $event->description }}</p>
                <p class="text-blue-600 text-sm mt-4">
                    {{ $event->event_date->format('Y-m-d H:i') }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
