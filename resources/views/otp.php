<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi OTP</title>
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
            width: 100%;
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

        .email-info {
            color: #0046B8;
            text-decoration: underline;
            margin: 5px 0;
        }

        .instruction {
            color: #666;
            font-size: 14px;
            margin: 5px 0 30px 0;
        }

        .otp-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .otp-input {
            width: 50px;
            height: 50px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .verify-button {
            background: #0046B8;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .resend-link {
            color: #666;
            font-size: 14px;
            margin-top: 20px;
        }

        .resend-link a {
            color: #0046B8;
            text-decoration: none;
            font-weight: 500;
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
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Cek Email Kamu</h1>
            <p class="email-info">ochiroo@gmail.co.id</p>
            <p class="instruction">masukan 4 digit kode yang disebutkan dalam E-Mail</p>
            
            <form id="otpForm">
                <div class="otp-container">
                    <input type="text" maxlength="1" class="otp-input" autofocus>
                    <input type="text" maxlength="1" class="otp-input">
                    <input type="text" maxlength="1" class="otp-input">
                    <input type="text" maxlength="1" class="otp-input">
                </div>
                
                <button type="submit" class="verify-button">Verifikasi Kode</button>
            </form>

            <p class="resend-link">
                Tidak mendapatkan email? <a href="#">Kirim ulang</a>
            </p>
        </div>

        <div class="image-section">
            <div class="step-indicators">
                <div class="step">1</div>
                <div class="step active">2</div>
                <div class="step">3</div>
                <div class="step">4</div>
            </div>
            <p class="step-text">Tolong cek email kamu ya, dan masukan 4 digit kode yang diterima.</p>
        </div>
    </div>

    <script>
        // Script untuk handling OTP input
        const otpInputs = document.querySelectorAll('.otp-input');
        
        otpInputs.forEach((input, index) => {
            // Automatically focus next input
            input.addEventListener('input', function() {
                if (this.value.length === 1 && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }
            });

            // Handle backspace
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && !this.value && index > 0) {
                    otpInputs[index - 1].focus();
                }
            });
        });
    </script>
</body>
</html>
