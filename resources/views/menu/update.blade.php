@extends('layout.layout')

@section('title', 'Ubah Menu')

@section('content')
    <!-- Container Utama -->
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg my-24">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Ubah Menu Katering</h1>

        <!-- Section Gambar -->
        <section class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Gambar Menu</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="bg-gray-200 rounded-lg p-4 flex flex-col items-center">
                    <img src="{{ asset('assets/images/menu/menu1.jpg') }}" alt="Gambar Menu"
                        class="w-full h-32 object-cover rounded-md mb-2">
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 focus:ring-4 focus:ring-red-300">
                        Hapus
                    </button>
                </div>
                <!-- Tambahkan lebih banyak card gambar di sini -->
            </div>

            <!-- Input File untuk Menambah Gambar -->

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" type="file">

            <button type="button"
                class="bg-green-600 mt-10 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-300">
                Tambah Gambar
            </button>
        </section>

        <!-- Section Ubah Menu -->
        <section>
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Ubah Data Menu</h2>
            <form>
                <!-- Kolom Nama -->
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-700">Nama Menu</label>
                    <input type="text" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                        placeholder="Masukkan nama menu">
                </div>

                <!-- Kolom Deskripsi -->
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea required rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                        placeholder="Masukkan deskripsi menu"></textarea>
                </div>

                <!-- Kolom Harga -->
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                        placeholder="Masukkan harga menu">
                </div>

                <!-- Tombol Simpan -->
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                    Simpan Perubahan
                </button>
            </form>
        </section>
    </div>

@endsection
