@extends('layout.layout')

@section('title', 'Order Katering')

@section('content')

    <div class="max-w-5xl mx-auto py-10 px-3 md:px-5">
        <!-- Brand Katering dan Kontak -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Nama Katering</h1>
            <p class="text-gray-600"><strong>Kontak:</strong> +62 812-3456-7890 | katering@contoh.com</p>
        </div>

        <!-- Detail Menu -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Nama Menu</h2>
            <p class="text-gray-700 mb-4">Deskripsi menu yang memberikan informasi tentang bahan, rasa, dan keunikan menu ini.</p>
            <p class="text-lg font-semibold text-gray-800 mb-4">Harga: Rp. 50.000</p>
        </div>

        <!-- Foto Menu (Kolase) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-6">
            <img class="rounded-lg object-cover h-48 w-full" src="https://via.placeholder.com/300x200" alt="Menu 1">
            <img class="rounded-lg object-cover h-48 w-full" src="https://via.placeholder.com/300x200" alt="Menu 2">
            <img class="rounded-lg object-cover h-48 w-full" src="https://via.placeholder.com/300x200" alt="Menu 3">
            <img class="rounded-lg object-cover h-48 w-full" src="https://via.placeholder.com/300x200" alt="Menu 4">
            <img class="rounded-lg object-cover h-48 w-full" src="https://via.placeholder.com/300x200" alt="Menu 5">
            <img class="rounded-lg object-cover h-48 w-full" src="https://via.placeholder.com/300x200" alt="Menu 6">
        </div>

        <!-- Kolom Input Order -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Order Menu</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" id="quantity" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Jumlah" min="1" value="1">
                </div>
                <div>
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-700">Harga Menu</label>
                    <input type="text" id="harga" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Rp. 50.000" disabled>
                </div>
                <div>
                    <label for="total" class="block mb-2 text-sm font-medium text-gray-700">Total Harga</label>
                    <input type="text" id="total" name="total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Total Harga" disabled>
                </div>
                <div>
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-700">Tanggal Pengiriman</label>
                    <input type="date" id="tanggal" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="col-span-2">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-700">Alamat Pengiriman</label>
                    <input type="textarea" id="alamat" name="alamat" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan alamat anda" required>
                </div>
            </div>
            <button class="inline-flex w-full justify-center items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Pesan Sekarang
            </button>
        </div>
    </div>


@endsection