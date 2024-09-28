<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <!-- Judul -->
        <h1 class="text-2xl font-semibold text-center mb-6">Masuk</h1>
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

        <!-- Kolom Email -->
        <form action="{{ route('inputLogin') }}" method="POST" class="space-y-4">
            @csrf
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

            <!-- Tombol Login -->
            <button type="submit"
                class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Login
            </button>
        </form>

        <!-- Link Register -->
        <p class="text-sm text-center mt-4">
            Belum punya akun?
            <a href="/register" class="text-blue-600 hover:underline">Daftar</a>
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
