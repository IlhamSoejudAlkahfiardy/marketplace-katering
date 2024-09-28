@extends('layout.layout')

@section('title', 'Detail Katering')

@section('content')

    <div class="max-w-5xl mx-auto py-10 px-3 md:px-5">
        <!-- Nama dan Alamat Katering -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Nama Katering</h1>
            <p class="text-gray-600"><strong>Alamat:</strong> Jl. Contoh Alamat No.123, Kota ABC</p>
        </div>

        <!-- Deskripsi Katering -->
        <div class="bg-white rounded-lg shadow-lg p-6 mt-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi</h2>
            <p class="text-gray-600">Ini adalah deskripsi katering yang memberikan layanan makanan terbaik dengan bahan-bahan
                segar dan berkualitas. Kami melayani pesanan untuk acara besar maupun kecil.</p>
        </div>

        <!-- Galeri Foto Menu (menggunakan Flowbite card) -->
        <div class="mt-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Menu Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center">
                <!-- Card 1 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('detailMenu') }}">
                        <img class="rounded-t-lg" src="{{ asset('assets/images/menu/menu1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('detailMenu') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ route('detailMenu') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-300 rounded-lg hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-200 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700">
                            Pesan
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>

                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('detailMenu') }}">
                        <img class="rounded-t-lg" src="{{ asset('assets/images/menu/menu1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('detailMenu') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ route('detailMenu') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-300 rounded-lg hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-200 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700">
                            Pesan
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>

                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('detailMenu') }}">
                        <img class="rounded-t-lg" src="{{ asset('assets/images/menu/menu1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('detailMenu') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ route('detailMenu') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-300 rounded-lg hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-200 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700">
                            Pesan
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>

                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('detailMenu') }}">
                        <img class="rounded-t-lg" src="{{ asset('assets/images/menu/menu1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('detailMenu') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ route('detailMenu') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-300 rounded-lg hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-200 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700">
                            Pesan
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Kontak -->
        <div class="bg-white rounded-lg shadow-lg p-6 mt-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Kontak</h2>
            <p class="text-gray-600"><strong>Telepon:</strong> +62 812-3456-7890</p>
            <p class="text-gray-600"><strong>Email:</strong> katering@contoh.com</p>
        </div>
    </div>
@endsection
