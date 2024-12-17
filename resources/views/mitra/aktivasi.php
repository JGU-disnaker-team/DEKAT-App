<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivasi Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-custom-blue {
            background-color: #0B42D9;
        }

        .text-custom-blue {
            color: #0B42D9;
        }

        .border-custom-blue {
            border-color: #0B42D9;
        }

        .input-field {
            background-color: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 10px;
            padding: 12px 16px 12px 40px;
            width: 100%;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-field:focus {
            border-color: #0B42D9;
            box-shadow: 0 0 0 4px rgba(11, 66, 217, 0.1);
        }

        .main-card {
            background: white;
            border-radius: 16px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .container-wrapper {
            border: 2px solid #E5E7EB;
            border-radius: 24px;
            padding: 20px;
            background-color: #FFFFFF;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            min-height: 600px;
        }

        .side-container {
            height: 560px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (min-width: 768px) {
            .container-wrapper {
                padding: 30px;
            }
        }
    </style>
</head>
<body class="bg-white min-h-screen">
    <div class="container mx-auto px-4 h-screen flex items-center justify-center">
        <div class="container-wrapper w-full max-w-6xl">
            <div class="grid md:grid-cols-2 gap-8 w-full">
                <!-- Left Side - Activation Illustration -->
                <div class="hidden md:flex items-center justify-center bg-custom-blue rounded-2xl side-container">
                    <div class="w-full max-w-md p-8">
                        <img src="img/protection.png" alt="Protection" class="max-w-full max-h-full object-contain">
                    </div>
                </div>

                <!-- Right Side - Activation Form -->
                <div class="w-full">
                    <div class="main-card p-8 md:p-10 w-full max-w-md mx-auto">
                        <div class="text-center mb-8">
                            <h1 class="text-custom-blue text-4xl font-bold">Aktivasi Akun</h1>
                            <h2 class="text-custom-blue text-xl mb-2">Ubah Kata Sandi untuk Aktivasi Akun</h2>
                        </div>

                        <form class="space-y-6">
                            <!-- New Password Field -->
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </span>
                                <input type="password" placeholder="Masukkan Kata Sandi Baru" class="input-field" required>
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </span>
                                <input type="password" placeholder="Konfirmasi Kata Sandi Baru" class="input-field" required>
                            </div>

                            <!-- Activation Note -->
                            <div class="text-sm text-gray-600">
                                * Kata Sandi minimal 8 karakter
                            </div>

                            <!-- Agreement Checkbox -->
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="terms" class="h-4 w-4 text-custom-blue border-gray-300 rounded focus:ring-custom-blue">
                                <label for="terms" class="text-sm text-gray-700">Saya menyetujui syarat dan ketentuan.</label>
                            </div>

                            <!-- Activation Button -->
                            <div class="pt-4">
                                <button type="submit" class="w-full bg-custom-blue text-white py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                    Aktivasi Akun
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <p class="text-sm text-gray-600">
                                Sudah memiliki akun? <a href="login.php" class="text-custom-blue hover:underline">Masuk</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
