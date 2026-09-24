@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6 ">Új feladat létrehozása</h1>
    <form action="" method="POST" class="bg-white rounded shadow border max-w-xl space-y-5 p-6">

        <div>
            <label for="title" class="block text-sm text-gray-700 mb-1">Cím</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="p-2 w-full rounded-md border">
        </div>

        <div>
            <label for="description" class="block text-sm text-gray-700 mb-1">Leírás</label>
            <textarea type="text" name="description" id="title" value="{{ old('description') }}" class="p-2 w-full rounded-md border"></textarea>
        </div>

        <div>
            <label for="due_time" class="block text-sm text-gray-700 mb-1">Határidő</label>
            <input type="datetime-local" name="due_time" id="title" value="{{ old('due_time') }}" class="p-2 w-full rounded-md border">
        </div>


    </form>


@endsection
