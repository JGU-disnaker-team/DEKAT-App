<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
                <!-- Left Side - 3D Illustration -->
                <div class="hidden md:flex items-center justify-center bg-custom-blue rounded-2xl side-container">
                    <div class="w-full max-w-md p-8">
                        <svg viewBox="0 0 400 400" class="w-full h-auto">
                            <!-- Phone Border -->
                            <rect x="100" y="50" width="200" height="300" rx="20" fill="white" stroke="#FFD700" stroke-width="8"/>
                            
                            <!-- User Icon Background -->
                            <circle cx="200" cy="150" r="40" fill="#6B7AFF"/>
                            
                            <!-- User Icon -->
                            <circle cx="200" cy="140" r="20" fill="white"/>
                            <path d="M170 180 Q200 220 230 180" fill="white" stroke="white" stroke-width="4"/>
                            
                            <!-- Checkmark Circle -->
                            <circle cx="270" cy="220" r="45" fill="#FFD700"/>
                            <path d="M250 220 L265 235 L290 205" stroke="white" stroke-width="8" fill="none"/>
                            
                            <!-- Password Dots -->
                            <circle cx="175" cy="270" r="5" fill="#333"/>
                            <circle cx="200" cy="270" r="5" fill="#333"/>
                            <circle cx="225" cy="270" r="5" fill="#333"/>
                        </svg>
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
                                    <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </span>
                                <input id="password-field" type="password" placeholder="Kata sandi" class="input-field" required>
                                <button type="button" id="toggle-password" class="absolute right-4 top-1/2 -translate-y-1/2">
                                    <svg id="eye-icon" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                            </div>

                            <!-- Forgot Password -->
                            <div class="text-right">
                                <a href="forgot.blade.php" class="text-custom-blue text-sm hover:underline">Lupa Kata sandi?</a>
                            </div>

                            <!-- Login Button -->
                            <div class="pt-2 flex justify-between">
                                <a href="signup.blade.php" class="w-full bg-gray-300 text-black py-3 rounded-lg hover:bg-gray-400 transition-colors text-center mr-2">
                                    Daftar
                                </a>
                                <button type="submit" class="w-full bg-custom-blue text-white py-3 rounded-lg hover:bg-blue-700 transition-colors">
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
