<!DOCTYPE html>
<html>
<head>
    <title>Kata Sandi Baru</title>
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
            width: 80%;
        }

        .form-section {
            width: 50%;
            padding: 40px 80px;
            background: white;
        }

        .image-section {
            width: 35%;
            background: #0046B8;
            background-image: url('assets/banner forgot.jpg');
            background-position: center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            height: 100vh;
            position: fixed;
            right: 0;
            z-index: 1;
        }

        h1 {
            color: #0046B8;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #0046B8;
        }

        input {
            width: 100%;
            padding: 12px 40px;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            background: #0046B8;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: auto;
        }

        .step-indicators {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
            margin-top: 5px;
            gap: 20px;
        }

        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .step.active {
            background: white;
            color: #0046B8;
        }

        .step-text {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            margin-top: 30px;
            margin-left: 75px;
            font-size: 18px;
            max-width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Kata Sandi Baru</h1>
            <p class="subtitle">Buat kata sandi baru</p>
            
            <form id="newPasswordForm">
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Kata Sandi baru" name="password">
                </div>
                
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Konfirmasi Kata Sandi" name="confirm_password">
                </div>
                
                <button type="submit"><a href="endsignup.blade.php" style="color: white; text-decoration: none;">Perbarui Kata sandi</button>
            </form>
        </div>

        <div class="image-section">
            <div class="step-indicators">
                <div class="step">1</div>
                <div class="step">2</div>
                <div class="step active">3</div>
                <div class="step">4</div>
            </div>
            <p class="step-text">Buat kata sandi baru yang terdiri dari Angka (0-9), Huruf besar (A-Z), Huruf kecil (a-z) dan Simbol (!@#$%).</p>
        </div>
    </div>

    <script>
        document.getElementById('newPasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your password validation logic here
        });
    </script>
</body>
</html>
