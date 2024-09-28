@extends('layout.layout')

@section('title', 'Manage Menu')

@section('content')
    <!-- Container Utama -->
    <div class="max-w-6xl mx-auto p-6 bg-white shadow-lg rounded-lg lg:my-12">
        <!-- Informasi Katering -->
        <div class="mb-8">
            <h1 class="text-3xl font-semibold text-gray-800 mb-10">Detail Katering</h1>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2 mb-8">
                <!-- Brand Katering -->
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Brand Katering</label>
                    <input type="text" readonly value="{{ $user->name }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none">
                </div>
                <!-- Kontak Katering -->
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">No HP</label>
                    <input type="number" readonly value="{{ $user->phone }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" readonly value="{{ $user->email }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none">
                </div>
            </div>

            <!-- Alamat Katering -->
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" readonly value="{{ $user->address }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none">
            </div>

            <!-- Deskripsi Katering -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea readonly rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none">{{ $user->desc }}</textarea>
            </div>
        </div>

        <!-- Section Kelola Menu -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-700">Kelola Menu</h2>
                <a href="{{ route('addMenu') }}"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-300">
                    + Add Menu
                </a>
            </div>

            <!-- Grid Card Menu -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($menus as $menu)
                    <!-- Card Menu 1 -->
                    <div
                        class="bg-white border border-gray-300 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-40 object-cover" src="{{ asset('storage/' . $menu->name) }}" alt="Menu 1">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $menu->name }}</h3>
                            <p class="text-sm text-gray-600 mb-3">{{ $menu->desc }}</p>
                            <p class="text-xl font-bold text-gray-800 mb-3">Rp {{ $menu->price }}</p>
                            <div class="flex justify-between">
                                <button class="px-4 py-2 text-white bg-red-600 rounded-lg hover:bg-red-700">Hapus</button>
                                <a href="{{ route('updateMenu') }}"
                                    class="px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg hover:bg-gray-100">Ubah</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
