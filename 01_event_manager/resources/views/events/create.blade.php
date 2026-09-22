@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold">Új rendezvény létrehozása</h1>
    <form action="{{route('events.store')}}" method="POST" class="max-w-xl">
        @csrf
        <div class="mb-2">
            <label for="title" class="block text-sm text-gray-700 mb-1" >Cím</label>
            <input type="text" name="title" id="title"
                class="w-full border border-gray-300 rounded p-1 focus:outline-none focus:border-blue-500 ">
                @error('title')
                    <p class="text-sm text-red-600">{{$message}}</p>
                @enderror
        </div>
        <div class="mb-2">
            <label class="block text-sm text-gray-700 mb-1">Leírás</label>
            <textarea name="description" class="w-full border border-gray-300 rounded p-1 focus:outline-none focus:border-blue-500 "></textarea>
             @error('description')
                    <p class="text-sm text-red-600">{{$message}}</p>
                @enderror
        </div>
        <div class="mb-2">
            <label class="block text-sm text-gray-700 mb-1">Dátum és időpont</label>
            <input name="event_date" type="date"
                class="w-full border border-gray-300 rounded p-1 focus:outline-none focus:border-blue-500 ">
                @error('event_date')
                    <p class="text-sm text-red-600">{{$message}}</p>
                @enderror
        </div>

        <div class="flex justify-between">
            <a href="{{ route('events.index') }}" class="px-4 py-2 text-sm text-gray-600 hover:text-gray-800">Mégse</a>
            <button type="submit"
                class="px-4 py-2 bg-blue-600 rounded text-white text-sm hover:bg-blue-700">Mentés</button>
        </div>

    </form>
@endsection
