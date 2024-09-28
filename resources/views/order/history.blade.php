@extends('layout.layout')

@section('title', 'Riwayat Pembelian')

@section('content')

    <div class="container mx-auto py-10">
        <!-- Judul Halaman -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Riwayat Pembelian</h1>

        <!-- Search Bar -->
        <div class="mb-6">
            <div class="flex justify-center">
                <input type="text" placeholder="Cari pembayaran..."
                    class="w-1/2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <button
                    class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Search
                </button>
            </div>
        </div>

        <!-- Tabel Riwayat Pembelian -->
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 bg-white">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">ID Pembayaran</th>
                        <th scope="col" class="px-6 py-3">Nama Menu</th>
                        <th scope="col" class="px-6 py-3">Nama Customer</th>
                        <th scope="col" class="px-6 py-3">Nama Katering</th>
                        <th scope="col" class="px-6 py-3">Tanggal Pembelian</th>
                        <th scope="col" class="px-6 py-3">Tanggal Pengiriman</th>
                        <th scope="col" class="px-6 py-3">Alamat Pengiriman</th>
                        <th scope="col" class="px-6 py-3">Quantity</th>
                        <th scope="col" class="px-6 py-3">Total Harga</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Baris Data -->
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">INV001</td>
                        <td class="px-6 py-4">Nasi Kotak</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">Katering Sejahtera</td>
                        <td class="px-6 py-4">2024-09-28</td>
                        <td class="px-6 py-4">2024-10-01</td>
                        <td class="px-6 py-4">Jl. Kebangsaan No.123</td>
                        <td class="px-6 py-4">10</td>
                        <td class="px-6 py-4">Rp 1.500.000</td>
                        <td class="px-6 py-4">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Cetak
                            </button>
                        </td>
                    </tr>
                    <!-- Ulangi Baris Data Sesuai Kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
