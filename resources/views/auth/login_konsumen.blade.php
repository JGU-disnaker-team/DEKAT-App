<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
                        <img src="img/protection.png" alt="Protection" class="max-w-full max-h-full object-contain">
                    </div>
                </div>

                <!-- Right Side - Login Form -->
                <div class="w-full side-container">
                    <div class="main-card p-8 md:p-10 w-full max-w-md mx-auto">
                        <div class="text-center mb-8">
                            <h1 class="text-custom-blue text-xl mb-2">Halo, Selamat Datang!</h1>
                            <h2 class="text-custom-blue text-4xl font-bold">Masuk</h2>
                        </div>

                        <form class="space-y-6">
                            <!-- Email Field -->
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">@</span>
                                <input type="email" placeholder="Alamat Email" class="input-field" required>
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
                                <input id="password-field" type="password" placeholder="Kata sandi" class="input-field"
                                    required>
                                <button type="button" id="toggle-password"
                                    class="absolute right-4 top-1/2 -translate-y-1/2">
                                    <svg id="eye-icon" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Forgot Password -->
                            <div class="text-right">
                                <a href="lupa_sandi.php" class="text-custom-blue text-sm hover:underline">Lupa Kata
                                    sandi?</a>
                            </div>

                            <!-- Login Button -->
                            <div class="pt-2">
                                <button type="submit"
                                    class="w-full bg-custom-blue text-white py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                    Masuk
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('toggle-password');
        const passwordField = document.getElementById('password-field');
        const eyeIcon = document.getElementById('eye-icon');

        togglePassword.addEventListener('click', () => {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Toggle icon appearance
            eyeIcon.classList.toggle('text-gray-400');
            eyeIcon.classList.toggle('text-custom-blue');
        });
    </script>
</body>

</html>