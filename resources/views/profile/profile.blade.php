@extends('layout.layout')

@section('title', 'Detail Profile')

@section('content')
    <div class="max-w-3xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">{{ $isEditing ? 'Ubah Profile' : 'Detail Profile' }}
        </h1>

        @if (session('success'))
            <div class=" bg-green-500 text-white p-4 rounded-lg mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($user)
            <form action="{{ route('updateProfile') }}" method="POST" class="bg-white rounded-lg shadow-lg p-6">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <span
                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-blue-800 bg-blue-100 rounded-full">
                        @if ($user->type == 'cust')
                            Customer
                        @else
                            Merchant
                        @endif
                    </span>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="name" value="{{ $user->name }}" {{ $isEditing ? '' : 'readonly' }}
                        class="mt-1 block w-full p-2.5 border border-gray-300 rounded-lg {{ $isEditing ? 'bg-white text-gray-900' : 'bg-gray-100 text-gray-600' }}" />
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" {{ $isEditing ? '' : 'readonly' }}
                        class="mt-1 block w-full p-2.5 border border-gray-300 rounded-lg {{ $isEditing ? 'bg-white text-gray-900' : 'bg-gray-100 text-gray-600' }}" />
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <input type="text" name="desc" value="{{ $user->desc }}" {{ $isEditing ? '' : 'readonly' }}
                        class="mt-1 block w-full p-2.5 border border-gray-300 rounded-lg {{ $isEditing ? 'bg-white text-gray-900' : 'bg-gray-100 text-gray-600' }}" />
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Alamat</label>
                    <input type="text" name="address" value="{{ $user->address }}" {{ $isEditing ? '' : 'readonly' }}
                        class="mt-1 block w-full p-2.5 border border-gray-300 rounded-lg {{ $isEditing ? 'bg-white text-gray-900' : 'bg-gray-100 text-gray-600' }}" />
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Kontak</label>
                    <input type="text" name="phone" value="{{ $user->phone }}" {{ $isEditing ? '' : 'readonly' }}
                        class="mt-1 block w-full p-2.5 border border-gray-300 rounded-lg {{ $isEditing ? 'bg-white text-gray-900' : 'bg-gray-100 text-gray-600' }}" />
                </div>

                @if ($isEditing)
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300">
                        Simpan
                    </button>

                    <a href="?edit=false"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                        Batal
                    </a>
                @else
                    <a href="?edit=true"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Ubah Profile
                    </a>
                @endif
            </form>
        @else
            <p>User Not Found</p>

        @endif
    </div>

@endsection
