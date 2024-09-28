@extends('layout.layout')

@section('title', 'Daftar Katering')

@section('content')
    <div class="max-w-5xl mx-auto py-10">
        <!-- Judul Halaman -->
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Daftar Katering</h1>

        <!-- Search Bar -->
        <div class="mb-6">
            <form class="">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari katering" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

        </div>

        <!-- Daftar Katering -->
        <div class="space-y-6">
            <!-- Card Katering -->
            <div
                class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out transform hover:-translate-y-1 w-full">
                <img class="rounded-t-lg w-full h-48 object-cover" src="https://via.placeholder.com/800x200"
                    alt="Cover Katering">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Brand Katering 1</h2>
                    <p class="text-gray-600"><strong>Kontak:</strong> +62 812-3456-7890</p>
                    <p class="text-gray-600"><strong>Alamat:</strong> Jl. Contoh No. 123, Kota ABC</p>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out transform hover:-translate-y-1 w-full">
                <img class="rounded-t-lg w-full h-48 object-cover" src="https://via.placeholder.com/800x200"
                    alt="Cover Katering">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Brand Katering 2</h2>
                    <p class="text-gray-600"><strong>Kontak:</strong> +62 812-3456-7891</p>
                    <p class="text-gray-600"><strong>Alamat:</strong> Jl. Contoh No. 456, Kota DEF</p>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out transform hover:-translate-y-1 w-full">
                <img class="rounded-t-lg w-full h-48 object-cover" src="https://via.placeholder.com/800x200"
                    alt="Cover Katering">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Brand Katering 3</h2>
                    <p class="text-gray-600"><strong>Kontak:</strong> +62 812-3456-7892</p>
                    <p class="text-gray-600"><strong>Alamat:</strong> Jl. Contoh No. 789, Kota GHI</p>
                </div>
            </div>

            <!-- Tambahkan lebih banyak card katering sesuai kebutuhan -->
        </div>
    </div>

@endsection
