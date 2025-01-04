<!-- <?php
session_start();
// require_once 'config/connection.php';

// Mengambil data dari session yang disimpan di newpayment.php
$jadwal_service = $_SESSION['jadwal_service'] ?? '';
$waktu = $_SESSION['waktu'] ?? '';
$nama = $_SESSION['nama'] ?? '';
$email = $_SESSION['email'] ?? '';
$alamat = $_SESSION['alamat'] ?? '';
$layanan = $_SESSION['layanan'] ?? [];
$total = $_SESSION['total'] ?? 0;
?> -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <a href="newpayment.php" class="back-button">
                <i class="fas fa-arrow-left"></i> Konfirmasi Pemesanan
            </a>
        </header>

        <div class="confirmation-card">
            <div class="section">
                <div class="section-header">
                    <h3>Jadwal Service & Kontak</h3>
                    <button class="edit-btn" onclick="window.location.href='newpayment.php'">Edit</button>
                </div>
                <div class="section-content">
                    <div class="info-item">
                        <i class="far fa-calendar"></i>
                        <span><?php echo $jadwal_service; ?></span>
                        <span><?php echo $waktu; ?> WIB</span>
                    </div>
                    <div class="info-item">
                        <i class="far fa-user"></i>
                        <span><?php echo $nama; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="far fa-envelope"></i>
                        <span><?php echo $email; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo $alamat; ?></span>
                    </div>
                </div>
            </div>

            <!-- Detail Layanan Card -->
            <div class="card">
                <div class="section-header">
                    <h3>Detail Layanan</h3>
                    <button class="edit-btn">Edit</button>
                </div>
                <div class="service-items">
                    <?php foreach ($layanan as $item): ?>
                    <div class="service-item">
                        <span><?php echo $item['nama']; ?></span>
                        <span><?php echo $item['jumlah']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="total-section">
                    <h3>Total</h3>
                    <div class="total-item">
                        <span>Biaya Reservasi</span>
                        <span>Rp<?php echo number_format($total, 0, ',', '.'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Promo Section -->
            <div class="promo-section">
                <a href="#" class="promo-link">
                    <div class="promo-content">
                        <div class="promo-left">
                            <i class="fas fa-ticket-alt"></i>
                            <span>Lihat Promo dan Voucher kamu</span>
                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            </div>

            <!-- Catatan Card -->
            <div class="card">
                <div class="section-header">
                    <h3>Catatan</h3>
                </div>
                <textarea class="notes-area" placeholder="Contoh: AC Tidak Dingin" readonly><?php echo $_SESSION['catatan'] ?? ''; ?></textarea>
            </div>

            <!-- Metode Pembayaran Section -->
            <div class="payment-method-section">
                <a href="#" class="payment-method-link" onclick="openPaymentModal()">
                    <div class="payment-method-left">
                        <i class="fas fa-credit-card"></i>
                        <span>Pilih Metode Pembayaran</span>
                    </div>
                    <span>Pilih</span>
                </a>
            </div>

            <!-- Payment Modal -->
            <div id="paymentModal" class="payment-modal" style="display: none;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Pilih Metode Pembayaran</h3>
                        <button class="close-btn" onclick="closePaymentModal()">&times;</button>
                    </div>
                    
                    <div class="payment-options">
                        <h4>Virtual Account</h4>
                        <div class="payment-option">
                            <label class="option-container">
                                <img src="assets/bca-logo.jpeg" alt="BCA">
                                <span>BCA Virtual Account</span>
                                <input type="radio" name="payment" value="bca">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="payment-option">
                            <label class="option-container">
                                <img src="assets/bri-logo.jpeg" alt="BRI">
                                <span>BRI Virtual Account</span>
                                <input type="radio" name="payment" value="bri">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="payment-option">
                            <label class="option-container">
                                <img src="assets/shopeepay-logo.jpeg" alt="ShopeePay">
                                <span>ShopeePay</span>
                                <input type="radio" name="payment" value="shopeepay">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="payment-option">
                            <label class="option-container">
                                <img src="assets/mandiri-logo.jpeg" alt="Mandiri">
                                <span>Transfer Bank Mandiri</span>
                                <input type="radio" name="payment" value="mandiri">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notice Section -->
            <div class="notice-section">
                <i class="fas fa-bell"></i>
                <p>Biaya reservasi *apabila jasa telah dilakukan, biaya jasa akan dikurangi oleh biaya reservasi</p>
            </div>

            <div class="reservation-footer">
                <div class="reservation-price">
                    <span>Biaya Reservasi</span>
                    <span class="price">Rp25.000</span>
                </div>
                <button class="pesan-btn">Pesan</button>
            </div>
        </div>

        <div class="button-container">
            <button class="confirm-btn" onclick="submitConfirmation()">Konfirmasi Pemesanan</button>
        </div>
    </div>

    <script>
    function submitConfirmation() {
        // Sementara langsung redirect ke success page
        alert('Pemesanan berhasil dikonfirmasi!');
        window.location.href = 'success.php';
        
        // Kode fetch di-comment dulu
        /*
        fetch('process_confirmation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                jadwal_service: '<?php echo $jadwal_service; ?>',
                waktu: '<?php echo $waktu; ?>',
                nama: '<?php echo $nama; ?>',
                email: '<?php echo $email; ?>',
                alamat: '<?php echo $alamat; ?>',
                layanan: <?php echo json_encode($layanan); ?>,
                total: <?php echo $total; ?>
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Pemesanan berhasil dikonfirmasi!');
                window.location.href = 'success.php';
            } else {
                alert('Terjadi kesalahan. Silakan coba lagi.');
            }
        }); 
        */
    }

    function openPaymentModal() {
        document.getElementById('paymentModal').style.display = 'flex';
    }

    function closePaymentModal() {
        document.getElementById('paymentModal').style.display = 'none';
    }

    // Menutup modal jika user mengklik di luar modal
    window.onclick = function(event) {
        var modal = document.getElementById('paymentModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
    </script>
</body>
</html>

<style>
/* Import font Montserrat dari Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

/* Terapkan font ke seluruh container */
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Montserrat', sans-serif;
    margin-bottom: 80px;
}

/* Pastikan semua teks menggunakan Montserrat */
body {
    font-family: 'Montserrat', sans-serif;
}

/* Atur weight untuk heading */
h3 {
    font-weight: 600;
}

/* Atur weight untuk tombol */
.confirm-btn {
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    width: 100%;
    padding: 15px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.confirmation-card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.section {
    margin-bottom: 20px;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.edit-btn {
    background: none;
    border: none;
    color: #007bff;
    cursor: pointer;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.info-item i {
    margin-right: 10px;
    width: 20px;
}

.service-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.total-section {
    border-top: 1px solid #eee;
    padding-top: 15px;
}

.total-item {
    display: flex;
    justify-content: space-between;
    font-weight: bold;
}

.confirm-btn:hover {
    background: #0056b3;
}

.back-button {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #333;
    margin-bottom: 20px;
}

.back-button i {
    margin-right: 10px;
}

/* Styling untuk textarea catatan */
.notes-area {
    width: 100%;
    min-height: 80px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    resize: none;
    font-family: 'Montserrat', sans-serif;
    background-color: #f8f9fa;
}

/* Styling untuk section notice */
.notice-section {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 15px;
}

.notice-content {
    display: flex;
    align-items: start;
    gap: 10px;
}

.notice-content i {
    color: #0056b3;
}

.notice-content p {
    margin: 0;
    font-size: 14px;
    color: #666;
}

/* Styling untuk footer reservasi */
.reservation-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: white;
    padding: 15px 20px;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.reservation-price {
    display: flex;
    flex-direction: column;
}

.reservation-price span {
    font-size: 14px;
}

.reservation-price .price {
    font-weight: 600;
    color: #007bff;
    font-size: 18px;
}

.pesan-btn {
    background: #007bff;
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 5px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    cursor: pointer;
}

.pesan-btn:hover {
    background: #0056b3;
}

/* Styling untuk section promo */
.promo-section {
    background: white;
    border-radius: 10px;
    margin: 20px 0;
    padding: 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.promo-link {
    text-decoration: none;
    display: block;
    background: #0047CC;
    color: white;
    padding: 15px 20px;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.promo-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.promo-left {
    display: flex;
    align-items: center;
    gap: 12px;
}

.promo-left i {
    font-size: 18px;
}

.promo-left span {
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
}

.promo-content .fa-chevron-right {
    font-size: 14px;
}

.promo-link:hover {
    background: #003399;
}

/* Styling untuk card terpisah */
.card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 15px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

/* Styling untuk promo section */
.promo-section {
    background: #0047CC;
    border-radius: 10px;
    margin: 15px 0;
    cursor: pointer;
}

.promo-link {
    text-decoration: none;
    display: block;
    color: white;
    padding: 15px 20px;
}

/* Styling untuk metode pembayaran section */
.payment-method-section {
    background: #0047CC;
    border-radius: 10px;
    margin: 20px 0;
    cursor: pointer;
}

.payment-method-link {
    text-decoration: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
    padding: 15px 20px;
}

.payment-method-left {
    display: flex;
    align-items: center;
    gap: 12px;
}

/* Styling untuk notice section */
.notice-section {
    background: white;
    border-radius: 10px;
    padding: 15px;
    margin: 15px 0;
    display: flex;
    align-items: start;
    gap: 10px;
}

.notice-section i {
    color: #666;
}

.notice-section p {
    margin: 0;
    font-size: 14px;
    color: #666;
}

/* Payment Modal Styles */
.payment-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.modal-content {
    background: white;
    border-radius: 15px;
    padding: 20px;
    width: 100%;
    max-width: 500px;
    margin: 15px;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.close-btn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
}

.payment-options h4 {
    color: #666;
    margin-bottom: 15px;
}

.payment-option {
    padding: 5px 0;
    border-bottom: 1px solid #eee;
}

.option-container {
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
    cursor: pointer;
    padding: 8px 30px 8px 0;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    font-weight: 500;
    width: 100%;
}

.option-container span {
    flex: 1;
    color: #333;
    line-height: 1.5;
}

.option-container img {
    height: 32px;
    width: 32px;
    object-fit: contain;
    margin-right: 5px;
}

.checkmark {
    position: absolute;
    right: 25px;
    height: 20px;
    width: 20px;
    border: 2px solid #ddd;
    border-radius: 50%;
}

.option-container input[type="radio"] {
    position: absolute;
    opacity: 0;
}

.option-container input[type="radio"]:checked + .checkmark {
    border-color: #0066cc;
    background: #0066cc;
}

.option-container input[type="radio"]:checked + .checkmark:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
</style>
