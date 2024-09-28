@extends('layout.layout')

@section('title', 'Detail Menu')

@section('content')

    <div class="max-w-4xl mx-auto py-10 px-3 md:px-5">
        <!-- Brand Katering dan Kontak -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $menu->name }}</h1>
            <p class="text-gray-600"><strong>Kontak:</strong> {{ $menu->phone }} | {{ $menu->email }}</p>
        </div>

        <!-- Foto Menu (Kolase) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-6">
            @foreach($pictures as $picture)
                <img class="rounded-lg object-cover h-48 w-full" src="{{ asset('storage/'.$picture->name) }}" alt="Menu 1">
            @endforeach
            
        </div>

        <!-- Detail Menu -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $menu->menu_name }}</h2>
            <p class="text-gray-700 mb-4">{{ $menu->menu_desc }}</p>
            <p class="text-lg font-semibold text-gray-800 mb-4">Harga: Rp. {{ $menu->price }}</p>
            <a href="{{ route('order') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Pesan Sekarang
            </a>
        </div>
    </div>

@endsection
