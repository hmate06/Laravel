@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto py-8">
        {{-- Űrlap  --}}
        <section class="bg-white rounded shadow max-w-xl p-6">
            <h2 class="text-xl mb-4">Új pizza rendelés</h2>
            <form action="{{ route('orders.store') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-sm text-gray-700 mb-1">Név:</label>
                    <input type="text" id="name" name="name" class="border border-gray-600 rounded p-2 w-full"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm text-gray-700 mb-1">Cím:</label>
                    <input type="text" id="address" name="address" class="border border-gray-600 rounded p-2 w-full"
                        value="{{ old('address') }}">
                    @error('address')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="size" class="block text-sm text-gray-700 mb-1">Méret:</label>
                    <select name="size" id="size" class="border border-gray-600 rounded p-2 w-full">
                        <option value="">Kérem válasszon</option>
                        @foreach ($sizes as $key => $size)
                            <option value="{{ $key }}" @selected(old('size'))>{{ $size }}</option>
                        @endforeach
                    </select>
                    @error('size')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="pasta" class="block text-sm text-gray-700 mb-1">Vastagság:</label>
                    <div class="flex gap-4">
                        @foreach ($pasta as $key => $pasta)
                            <input type="radio" id="pasta" name="pasta" class="border border-gray-600 rounded p-2"
                                value="{{ $key }}" @checked(old('pasta') === $key)>
                            <span>{{ $pasta }}</span>
                        @endforeach
                    </div>
                    @error('pasta')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">Jelentkezés
                    elküldése</button>
            </form>
        </section>

        {{-- Lista  --}}
        <section class="bg-white rounded shadow   mt-10">

            <div class="grid grid-cols-3 md:grid-cols-6 mx-auto gap-3 ">
                @forelse ($orders as $order)
                    <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                        <div class="flex items-start justify-between gap-2">
                            <h3 class="font-semibold text-gray-800">{{ $order->name }}</h3>
                        </div>
                        <p class="text-sm text-gray-500">Cím: {{ $order->address }}</p>

                        <p class=" text-sm text-gray-700">Méret: {{ $order->size }}</p>
                        <p class=" text-sm text-gray-700">Vastagság: {{ $order->pasta }}</p>
                        <p class="mt-3 text-xs text-gray-400">
                            Rendelve: {{ $order->created_at->format('Y.m.d. H:i') }}
                        </p>
                    </article>
                @empty
                    {{-- nincs adat --}}
                    <p>Még nem érkezett rendelés.</p>
                @endforelse
            </div>
        </section>

    </div>
@endsection
