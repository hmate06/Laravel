@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Új feladat létrehozása</h1>

    <form action="{{ route('tasks.store') }}" method="post" class="bg-white rounded shadow border max-w-xl space-y-5 p-6">
        @csrf
        <div>
            <label for="title" class="block text-sm text-gray-700 mb-1">Cím:</label>
            <input value="{{ old('title') }}" type="text" name="title" id="title"
                class="w-full p-2 border rounded-md {{ $errors->has('title') ? 'border-red-500' : 'border-gray-600' }}">
            @error('title')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-sm text-gray-700 mb-1">Leírás:</label>
            <textarea type="text" name="description" id="description"
                class="w-full p-2 border rounded-md {{ $errors->has('description') ? 'border-red-500' : 'border-gray-600' }}"">{{ old('descrition') }}</textarea>
            @error('descrition')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="due_date" class="block text-sm text-gray-700 mb-1">Határidő:</label>
            <input value="{{ old('due_date') }}" type="datetime-local" name="due_date" id="due_date"
                class="w-full p-2 border rounded-md {{ $errors->has('due_date') ? 'border-red-500' : 'border-gray-600' }}"">
            @error('due_date')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-between mt-4">
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-800">Mentés</button>
            <a href="{{ route('tasks.index') }}"
                class="bg-gray-600 text-white px-4 py-2 rounded text-sm hover:bg-gray-800">Mégse</a>

        </div>
    </form>
@endsection
