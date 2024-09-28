@extends('layout.layout')

@section('title', 'Tambah Menu')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Tambah Menu Katering</h1>

        <!-- Form Tambah Menu -->
        <form action="{{ route('inputMenu') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Kolom Nama -->
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-700">Nama Menu</label>
                <input type="text" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan nama menu">
            </div>

            <!-- Kolom Deskripsi -->
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea required rows="4" name="desc"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan deskripsi menu"></textarea>
            </div>

            <!-- Kolom Harga -->
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-700">Harga</label>
                <input type="number" name="price" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan harga menu">
            </div>

            <!-- Section Input Gambar -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Upload Gambar Menu</h2>
                <input type="file" name="image"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200" />
            </div>

            <!-- Tombol Simpan -->
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                Simpan Menu
            </button>
        </form>
    </div>

@endsection
