<!DOCTYPE html>
<html>

<head>
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/register-konsumen.css') }}">
</head>

<body>
    <div class="container">
        <div class="form-section">
            <h1>Daftar</h1>
            <form id="signupForm">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Doni leonardo" name="nama">
                </div>

                <div class="form-group">
                    <i class="fas fa-phone"></i>
                    <input type="text" placeholder="081234567xxx" name="phone">
                </div>

                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="ochiroo@gmail.co.id" name="email">
                </div>

                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Ochiroo123@" name="password">
                    <h3 class="password-instructions">
                        *Kata Sandi harus terdiri Minimal 8 Karakter Angka, (1-0) Huruf Besar (A-Z) dan Huruf Kecil
                        (a-z) atau Simbol (!@#$)
                    </h3>
                </div>

                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Konfirmasi kata sandi" name="konfirmasi">
                </div>

                <div class="form-group">
                    <input type="checkbox" id="terms" style="width: auto;">
                    <label for="terms">Saya telah membaca dan menyetujui ketentuan</label>
                </div>

                <button type="submit">Daftar</button>
            </form>

            <div class="login-link">
                Sudah mempunyai akun? <a href="#">Masuk</a>
            </div>
        </div>

        <div class="image-section">
            <img src="assets/banner signup2.jpg">
            <div class="welcome-text">
                Hai, senang bertemu dengan mu silahkan isi formulirnya ya untuk mendaftar.
            </div>
        </div>
    </div>
</body>

</html>