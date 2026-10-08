@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold mb-6">Feladatok</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-800">+ Új
            feladat</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse ($tasks as $task)
            <div
                class="flex flex-col bg-white rounded shadow p-5 border {{ $task->is_done ? 'border-gray-500' : 'border-green-500' }}">

                <div class="flex justify-between">
                    <h2 class="text-lg text-gray-900">{{ $task->title }}</h2>

                    @if ($task->is_done)
                        <span class="text-xs bg-green-100 text-green-800 rounded-full py-1 px-2">Kész</span>
                    @elseif ($task->isOverdue())
                        <span class="text-xs bg-red-100 text-red-800 rounded-full py-1 px-2">Lejárt</span>
                    @else
                        <span class="text-xs bg-gray-100 text-gray-800 rounded-full py-1 px-2">Nyitott</span>
                    @endif

                </div>

                @if ($task->description)
                    <p class="text-gray-600 text-sm">{{ $task->description }}</p>
                @else
                    <p class="text-gray-600 text-sm italic">Nincs leírás megadva.</p>
                @endif
                <p class="text-sm my-4 flex-1">Határidő: {{ $task->due_date->format('Y.m.d. H:i') }}</p>

                <div class="flex justify-between">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                            class=" text-white px-4 py-2 rounded text-sm
                        {{ $task->is_done ? 'bg-gray-600 hover:bg-gray-800' : 'bg-green-600 hover:bg-green-800' }}">
                            {{ $task->is_done ? 'Visszaállítás' : 'Megjelölés késznek' }}
                        </button>
                    </form>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                        onsubmit="return confirm('Biztosan törlöd ezt a feladatot?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-600 text-white px-4 py-2 rounded text-sm hover:bg-red-800">Törlés</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500">Jelenleg nincsenek feladatok!</p>
        @endforelse
    </div>
@endsection
