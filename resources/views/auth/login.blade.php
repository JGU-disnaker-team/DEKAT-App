<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEKAT | Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/login-konsumen.css') }}">
</head>

<body class="bg-white min-h-screen">
    <div class="container mx-auto px-4 h-screen flex items-center justify-center">
        <div class="container-wrapper w-full max-w-6xl">
            <div class="grid md:grid-cols-2 gap-8 w-full">
                <!-- Left Side - 3D Illustration -->
                <div class="hidden md:flex items-center justify-center bg-custom-blue rounded-2xl side-container">
                    <div class="w-full max-w-md p-8 flex items-center justify-center">
                        <img src="{{ asset('img/protection.png') }}" alt="Protection"
                            class="max-w-full max-h-full object-contain">
                    </div>
                </div>

                <!-- Right Side - Login Form -->
                <div class="w-full side-container">
                    <div class="main-card p-8 md:p-10 w-full max-w-md mx-auto">
                        <div class="text-center mb-8">
                            <h1 class="text-custom-blue text-xl mb-2">Halo, Selamat Datang!</h1>
                            <h2 class="text-custom-blue text-4xl font-bold">Masuk</h2>
                        </div>

                        <form method="POST" action="{{ route('login') }}" class="space-y-6">
                            @csrf

                            <!-- Email Field -->
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">@</span>
                                <input id="email" type="email" name="email" :value="old('email')" required
                                    placeholder="Alamat Email" class="input-field">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password Field -->
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </span>
                                <input id="password" type="password" name="password" required placeholder="Kata sandi"
                                    class="input-field">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ms-2 text-sm text-gray-600">Ingat Saya</span>
                                </label>
                            </div>

                            <!-- Forgot Password -->
                            <div class="text-right">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="text-custom-blue text-sm hover:underline">
                                        Lupa Kata Sandi?
                                    </a>
                                @endif
                            </div>

                            <!-- Login Button -->
                            <div class="pt-2">
                                <button type="submit"
                                    class="w-full bg-custom-blue text-white py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                    Masuk
                                </button>
                            </div>

                            <!-- Register -->
                            <div class="text-center">
                                @if (Route::has('register'))
                                    <a class="text-custom-black text-sm">Belum memiliki akun? <a
                                            href="{{ route('register') }}" class="text-custom-blue text-sm hover:underline">
                                            Daftar
                                        </a></a>
                                @endif
                            </div>

                            <!-- or -->
                            <div class="text-center">
                                <a class="text-custom-black text-sm">atau</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('toggle-password');
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        if (togglePassword) {
            togglePassword.addEventListener('click', () => {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                eyeIcon.classList.toggle('text-gray-400');
                eyeIcon.classList.toggle('text-custom-blue');
            });
        }
    </script>
</body>