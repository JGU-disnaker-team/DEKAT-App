<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
        }
        
        .container {
            display: flex;
            width: 55%;
            height: 100vh;
            position: relative;
        }

        .form-section {
            width: 65%;
            padding: 20px 60px;
            overflow-y: auto;
            margin-top: 40px;
            margin-left: 90px;
        }

        .image-section {
            width: 35%;
            background: url('banner_signup.png') no-repeat;
            background-position: center;
            background-size: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 30px;
            height: 100%;
            position: fixed;
            right: 0;
            z-index: 1; /* Pastikan gambar berada di bawah teks */
        }

        .image-section img {
            max-width: 215%; /* Mengecilkan ukuran gambar */
            margin-left: -50px; /* Memberi jarak dari kiri */
            margin-top: 70px;
            
        }

        h1 {
            font-weight: bold;
            color: #0046B8;
            font-size: 28px;
            margin-top: 40px;
            margin-bottom: 30px;
            margin-left: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 12px;
            top: 11px;
            color: #0046B8;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 8px 12px 6px 35px;
            border: 2px solid #e0e0e0;
            border-radius: 20px;
            box-sizing: border-box;
            font-size: 14px;
            line-height: 20px;
        }

        button {
            width: 20%;
            padding: 12px;
            background: #0046B8;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #0046B8;
            text-decoration: none;
        }

        .welcome-text {
            color: white;
            font-size: 22px;
            max-width: 280px;
            text-align: center;
            line-height: 1.5;
            padding: 0 15px;
            position: absolute; /* Menggunakan absolute untuk kontrol posisi yang lebih baik */
            padding: 20px;
            z-index: 2; /* Pastikan teks muncul di atas gambar */
            top: 40%; /* Posisikan teks di tengah secara vertikal */
            transform: translateY(-50%); /* Pusatkan vertikal */
            width: 90%; /* Atur lebar teks agar responsif */
        }

        .password-instructions {
            font-size: 12px;
            color: #666;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
        }
    </style>
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
                        *Kata Sandi harus terdiri Minimal 8 Karakter Angka, (1-0) Huruf Besar (A-Z) dan Huruf Kecil (a-z) atau Simbol (!@#$)
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
