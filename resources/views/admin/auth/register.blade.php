<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login-admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <div class="title"><span>Register</span></div>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="row">
                <i class="fas fa-user"></i>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus placeholder="Nama" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="row">
                <i class="fas fa-envelope"></i>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="row">
                <i class="fas fa-lock"></i>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="Kata Sandi" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="row">
                <i class="fas fa-lock"></i>
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Konfirmasi Kata Sandi" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="row button">
                <input type="submit" value="Register" />
            </div>

            <!-- Pesan Error -->
            @if ($errors->any())
                <div class="error-messages">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- Already Registered -->
            @if (Route::has('login'))
                <div class="forgot-password">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered? Login here.') }}
                    </a>
                </div>
            @endif
        </form>
    </div>
</body>