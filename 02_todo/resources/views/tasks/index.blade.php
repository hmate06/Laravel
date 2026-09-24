@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center">
    <h1 class="text-2xl font-bold mb-6">Feladatok</h1>
    <a href="{{ route('tasks.create') }}" class="text-sm bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-800" >+ Új feladat</a>
</div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse ($tasks as $t)
            <div class="bg-white rounded shadow p-5">
                <h2 class="text-lg text-gray-900">{{ $t->title }}</h2>
                @if ($t->description)
                    <p class="text-gray-600 text-sm">{{ $t->description }}</p>
                @else
                    <p class="text-gray-600 text-sm italic">Nincs leírás megadva</p>
                @endif
                <p class="mt-4 text-sm">Határidő: {{ $t->due_date->format('Y.m.d. H:i') }}</p>
                @if ($t->is_done)
                    <p class="text-green-600 font-semibold">Kész</p>
                @else
                    <p class="text-yellow-600 font-semibold">Folyamatban</p>
                @endif

            </div>
        @empty
            <p class="text-gray-500">Jelenleg nincsenek feladatok.</p>
        @endforelse
    </div>


@endsection
