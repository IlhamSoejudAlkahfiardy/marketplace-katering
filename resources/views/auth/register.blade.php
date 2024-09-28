<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <!-- Judul -->
        <h1 class="text-2xl font-semibold text-center mb-6">Daftar</h1>
        @if ($errors->any())
            <div class="mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Kolom Email -->
        <form action="{{ route('inputRegister') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Kolom Password -->
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="button" class="absolute inset-y-0 right-3 flex items-center"
                        onclick="togglePassword()">
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12A3 3 0 0112 15a3 3 0 01-3-3 3 3 0 013-3m0 9a9 9 0 016-6M12 3a9 9 0 00-6 6m0 6a9 9 0 016 6">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <div>
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Pilih Kategori Anda</label>
                <select id="type" name="type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih kategori</option>
                    <option value="cust">Customer</option>
                    <option value="merch">Merchant</option>
                </select>
            </div>

            <!-- Tombol Register -->
            <button type="submit"
                class="w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300">
                Daftar
            </button>
        </form>

        <!-- Link Login -->
        <p class="text-sm text-center mt-4">
            Sudah punya akun?
            <a href="/login" class="text-blue-600 hover:underline">Masuk</a>
        </p>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A7.5 7.5 0 012.125 5.18m0 0a7.5 7.5 0 0111.75 13.645m0 0a7.5 7.5 0 01-11.75-13.645M15.75 12.75v.01m-3-6v6m3-6v6"/>';
            } else {
                passwordField.type = 'password';
                eyeIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm0 9a9 9 0 006-6m0-6a9 9 0 00-6-6m0 6a9 9 0 01-6 6"/>';
            }
        }
    </script>
</body>

</html>
