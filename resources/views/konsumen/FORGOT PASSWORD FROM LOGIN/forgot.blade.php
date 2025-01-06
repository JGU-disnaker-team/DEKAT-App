<!DOCTYPE html>
<html>
<head>
    <title>Lupa Kata Sandi</title>
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
            padding: 40px;
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
            color: white;
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
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Lupa Kata Sandi</h1>
            <p class="subtitle">Tolong masukan Alamat surel anda untuk mereset kata sandi</p>
            
            <form id="forgotForm">
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="ochiroo@gmail.co.id" name="email">
                </div>
                
                <button type="submit"><a href="otp.blade.php" style="color: white; text-decoration: none;">Reset Kata Sandi</a></button>
            </form>
        </div>

        <div class="image-section">
            <div class="step-indicators">
                <div class="step active">1</div>
                <div class="step">2</div>
                <div class="step">3</div>
                <div class="step">4</div>
            </div>
            <p class="step-text">Masukan Alamat surel kamu ya...</p>
        </div>
    </div>
</body>
</html>
