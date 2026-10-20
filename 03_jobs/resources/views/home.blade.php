@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto py-8">
        {{-- Űrlap  --}}
        <section class="bg-white rounded shadow max-w-xl p-6">
            <h2 class="text-xl mb-4">Új jelentkezés</h2>
            <form action="{{ route('jobs.store') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-sm text-gray-700 mb-1">Név:</label>
                    <input type="text" id="name" name="name" class="border border-gray-600 rounded p-2 w-full"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-700 mb-1">Email:</label>
                    <input type="text" id="email" name="email" class="border border-gray-600 rounded p-2 w-full"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="birth_year" class="block text-sm text-gray-700 mb-1">Születési év:</label>
                    <input type="number" id="birth_year" name="birth_year"
                        class="border border-gray-600 rounded p-2 w-full" value="{{ old('birth_year') }}">
                    @error('birth_year')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="position" class="block text-sm text-gray-700 mb-1">Pozíció:</label>
                    <select name="position" id="position" class="border border-gray-600 rounded p-2 w-full">
                        <option value="">Kérem válasszon</option>
                        @foreach ($positions as $key => $position)
                            <option value="{{ $key }}" @selected(old('position'))>{{ $position }}</option>
                        @endforeach
                    </select>
                    @error('position')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="introduction" class="block text-sm text-gray-700 mb-1">Bemutatkozás:</label>
                    <textarea type="number" id="introduction" name="introduction" class="border border-gray-600 rounded p-2 w-full">{{ old('introduction') }}</textarea>
                    @error('introduction')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="consent" class="block text-sm text-gray-700 mb-1">
                        <input type="checkbox" name="consent" id="consent" @checked(old('consent'))>
                        <span>Hozzájárulok, hogy a megadott adataimat a jelentkezés elbírálásához kezeljék.</span>
                    </label>
                    @error('consent')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">Jelentkezés
                    elküldése</button>
            </form>
        </section>

        {{-- Lista  --}}
        <section class="bg-white rounded shadow  p-6 mt-10">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 ">
                @forelse ($jobs as $job)
                    <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <h3 class="font-semibold text-gray-800">{{ $job->name }}</h3>
                                <p class="text-sm text-gray-500">{{ $job->email }}</p>
                            </div>
                            <span class="shrink-0 rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-800">
                                {{ $job->position }}
                            </span>
                        </div>
                        <p class="mt-3 text-sm text-gray-700">{{ $job->introduction, 150 }}</p>
                        <p class="mt-3 text-xs text-gray-400">
                            Szül. év: {{ $job->birth_year }} ·
                            Jelentkezett: {{ $job->created_at->format('Y.m.d. H:i') }}
                        </p>
                    </article>
                @empty
                    {{-- nincs adat --}}
                    <p>Még nem érkezett jelentkezés.</p>
                @endforelse
            </div>
        </section>

    </div>
@endsection
