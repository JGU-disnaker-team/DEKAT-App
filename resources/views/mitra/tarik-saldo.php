<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penarikan Saldo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f9fe;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            color: #1a73e8;
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #1a73e8;
        }

        .balance-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .balance-amount {
            font-size: 24px;
            color: #00137F;
            font-weight: bold;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .submit-button {
            background-color: #0B42D9;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #1557b0;
        }

        .submit-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .back-button {
            background-color: #f0f2f5;
            color: #666;
            padding: 14px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .back-button:hover {
            background-color: #e4e6e9;
            color: #1a73e8;
        }

        .back-icon {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            input, select, button {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Penarikan Saldo</h1>
        
        <div class="balance-info">
            <label>Saldo Tersedia</label>
            <div class="balance-amount">Rp <span id="availableBalance">150.000</span></div>
        </div>

        <form id="withdrawForm">
            <div class="form-group">
                <label for="bank">Bank Tujuan</label>
                <select id="bank" required>
                    <option value="">Pilih Bank</option>
                    <option value="bca">BCA</option>
                    <option value="mandiri">Mandiri</option>
                    <option value="bni">BNI</option>
                    <option value="bri">BRI</option>
                </select>
            </div>

            <div class="form-group">
                <label for="accountNumber">Nomor Rekening</label>
                <input type="text" id="accountNumber" required pattern="[0-9]+" maxlength="20">
                <div class="error" id="accountNumberError">Nomor rekening hanya boleh berisi angka</div>
            </div>

            <div class="form-group">
                <label for="amount">Jumlah Penarikan</label>
                <input type="number" id="amount" required min="10000">
                <div class="error" id="amountError">Jumlah minimal penarikan Rp 10.000</div>
            </div>

            <div class="button-group">
                <button type="submit" id="withdrawButton" class="submit-button">Tarik Saldo</button>
                <button type="button" class="back-button" onclick="goBack()">
                    Kembali
                </button>
            </div>
        </form>
    </div>

    <script>
        function goBack() {
            // Dalam implementasi nyata, ganti dengan URL halaman sebelumnya
            window.history.back();
            // Atau gunakan: window.location.href = 'halaman-sebelumnya.html';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('withdrawForm');
            const accountNumber = document.getElementById('accountNumber');
            const amount = document.getElementById('amount');
            const accountNumberError = document.getElementById('accountNumberError');
            const amountError = document.getElementById('amountError');
            const availableBalance = parseInt(document.getElementById('availableBalance').textContent.replace(/\./g, ''));

            accountNumber.addEventListener('input', function() {
                if (!/^\d*$/.test(this.value)) {
                    accountNumberError.style.display = 'block';
                    this.setCustomValidity('Invalid');
                } else {
                    accountNumberError.style.display = 'none';
                    this.setCustomValidity('');
                }
            });

            amount.addEventListener('input', function() {
                const value = parseInt(this.value);
                if (value < 10000) {
                    amountError.style.display = 'block';
                    this.setCustomValidity('Invalid');
                } else if (value > availableBalance) {
                    amountError.textContent = 'Jumlah melebihi saldo tersedia';
                    amountError.style.display = 'block';
                    this.setCustomValidity('Invalid');
                } else {
                    amountError.style.display = 'none';
                    this.setCustomValidity('');
                }
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = {
                    bank: document.getElementById('bank').value,
                    accountNumber: accountNumber.value,
                    amount: amount.value
                };

                // Simulasi pengiriman data ke server
                console.log('Mengirim data penarikan:', formData);
                alert('Permintaan penarikan berhasil diproses!');
                form.reset();
            });
        });
    </script>
</body>
</html>