@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto py-8">
        <section class="bg-white rounded shadow max-w-xl p-6">
            <h2 class="text-xl mb-4">Új jelentkezés</h2>
            <form action="{{route('job.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm text-gray-700 mb-1">Név</label>
                    <input type="text" name="name" id="name" class="border border-gray-700 rounded p-2 w-full" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required class="border border-gray-700 rounded p-2 w-full">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="birth_year" class="block text-sm text-gray-700 mb-1">Születési év</label>
                    <input type="number" name="birth_year" id="birth_year" value="2006" required class="border border-gray-700 rounded p-2 w-full">
                    @error('birth_year')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="position" class="block text-sm text-gray-700 mb-1">Pozíció</label>
                    <select name="position" id="position" required class="border border-gray-700 rounded p-2 w-full">
                        <option value="">Kérem válasszon</option>
                        <option value="developer">Fejlesztő</option>
                        <option value="designer">Tervező</option>
                    </select>
                    @error('position')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="introduction" class="block text-sm text-gray-700 mb-1">Bemutatkozás</label>
                    <textarea name="introduction" id="introduction" required class="border border-gray-700 rounded p-2 w-full"></textarea>
                    @error('introduction')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="introduction" class="block text-sm text-gray-700 mb-1">
                        <input type="checkbox" name="consent" id="consent">
                        <span class="ml-2">Elfogadom a személyes adataim kezelését</span>
                    </label>
                    @error('consent')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">Jelentkezés elküldése</button>
            </form>
        </section>

        <section>
            @forelse ($jobs as $job)
                <div class="border border-gray-300 rounded p-4 mb-4">
                    <h3 class="text-lg font-semibold">{{ $job->title }}</h3>
                    <p class="text-gray-600">{{ $job->description }}</p>
                </div>
            @empty
                <p class="text-gray-500">Nincs elérhető munka.</p>
            @endforelse
        </section>
    </div>
@endsection
