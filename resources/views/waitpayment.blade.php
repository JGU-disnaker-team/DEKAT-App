<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menunggu Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    :root {
    --primary-color: #073BBE;
    --secondary-color: #333;
    --white-color: #f9f9f9;
    --max-width: 1200px;
        }

        body {
            background-color: #f0f0f0;
            padding: 20px;
            padding-top: 10px;
        }
        .payment-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 40px auto;
        }
        .countdown {
            color: white;
            background: #ff0000;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
        }
        .copy-btn {
            color: #0d6efd;
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
            font-size: 14px;
        }
        .bank-logo {
            max-width: 100px;
            margin-top: 20px;
        }
        .divider {
            border-top: 1px solid #e0e0e0;
            margin: 20px 0;
        }

        /* Navbar Styles */
nav {
    position: relative;
    max-width: 1700px;
    margin: 0 auto 50px auto;
    padding: 0.5rem 1rem;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-radius: 10px;
}

/* Logo Styles */
.nav_logo a {
    margin-right: auto;
    font-size: 40px;
    font-weight: 700;
    color: var(--primary-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav_logo a:hover {
    color: var(--secondary-color);
}

/* Navigation Links */
.nav_links {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 1rem;
    width: 100%;
    margin: 0;
    padding: 0;
}

.grup-kiri {
    display: flex;
    align-items: center;
    gap: 10rem;
    flex-grow: 1;
}

.grup-kiri .nav_links {
    display: flex;
    justify-content: center;
    gap: 3rem;
}

.grup-kanan {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-left: 0;
}

.nav_links .link {
    display: flex;
    align-items: center;
}

/* Menghapus redundansi dengan menggabungkan .nav_links .link a dan .link a */
.nav_links .link a {
    padding: 0.3rem 0.5rem;
    font-size: 18px;
    font-weight: 500;
    color: var(--secondary-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav_links .link a:hover {
    color: var(--primary-color);
}

/* Icons Style */
.nav_links i {
    font-size: 18px;
    margin-right: 0;
    padding: 0;
    color: var(--secondary-color);
    background: none;
    border: none;
    transition: color 0.3s ease;
    /* outline: 5px solid blue; */
}

.nav_links i:hover {
    color: var(--primary-color);
}

/* Login Button Style */
.nav_links .link .nav_btn {
    padding: .5rem 1.5rem;
    color: var(--white-color) !important; /* Memastikan warna text tetap */
    background-color: var(--primary-color);
    border-radius: 100px;
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
    /* Tambahan untuk memastikan font selalu terlihat */
    font-family: "Montserrat", sans-serif;
    letter-spacing: 0.5px;
}

.nav_links .link .nav_btn:hover {
    background-color: var(--secondary-color);
    color: var(--white-color) !important;
}

/* Pastikan parent elements tidak mempengaruhi button */
.nav_links .link {
    display: flex;
    align-items: center;
}

.nav_links .link:last-child a {
    padding: 0.5rem 1.5rem; /* Menyamakan padding dengan nav_btn */
}

.nav_links li {
    list-style: none; /* Hilangkan bullet */
    margin: 0; /* Hilangkan margin */
    padding: 0; /* Hilangkan padding */
    background: none; /* Hilangkan warna latar */
    border: none; /* Hilangkan border */
}


/* Icon Spacing
.nav_links li:nth-child(4) {
    margin-right: -100px;
}

.nav_links li:nth-child(5) {
    margin-left: 2px;
} */

/* Dropdown Styles */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 20px;
    font-weight: 500;
    border: none;
    outline: none;
    color: var(--secondary-color);
    padding: 14px 16px;
    background-color: transparent;
    font-family: inherit;
    margin: 0;
    transition: color 0.3s ease;
}

.dropdown .dropbtn:hover {
    color: var(--primary-color);
}

.dropdown:hover > .dropdown-content {
    display: block;
    opacity: 1;
    transform: translate(-50%, 0);
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: var(--white-color);
    min-width: 300px;
    padding: 15px;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
    z-index: 1;
    border-radius: 8px;
    opacity: 0;
    transform: translate(-50%, 10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.dropdown-content .dropdown-grid {
    display: grid; /* Baru atau Diperbarui */
    grid-template-columns: repeat(3, 1fr); /* Membagi menjadi 3 kolom */
    gap: 10px; 
}

.dropdown-content .dropdown-item {
    text-align: center; 
    background-color: var(--white-color); 
    padding: 15px; 
    border-radius: 8px;
    transition: transform 0.3s ease, background-color 0.3s ease; 
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 140px;
    height: 180px;
}

.dropdown-content .dropdown-item img {
    width: 120px; 
    height: 120px; 
    margin: 0 auto 10px;
    display: block; 
    border-radius: 5px; 
    object-fit: cover; 
    transition: transform 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
}

.dropdown-content .dropdown-item:hover img {
    transform: scale(1.1); /* Tambahkan efek zoom saat hover */
}

.dropdown-content .dropdown-item h5 {
    font-size: 18px; /* Baru atau Diperbarui */
    font-weight: 600; /* Baru atau Diperbarui */
    color: var(--secondary-color); /* Baru atau Diperbarui */
    margin-top: 5px; /* Baru atau Diperbarui */
    transition: color var(--transition-time) ease; /* Baru atau Diperbarui */
    text-align: center;
}

.dropdown-content .dropdown-item:hover {
    transform: translateY(-5px); /* Baru atau Diperbarui */
    background-color: var(--primary-color); /* Baru atau Diperbarui */
}

.dropdown-content .dropdown-item:hover h5 {
    color: var(--white-color); /* Baru atau Diperbarui */
}

/* Menyejajarkan Ikon dengan Profil */
.grup-kanan .nav_links {
    display: flex;
    align-items: center;
    gap: 20px;
}

.grup-kanan .link {
    display: flex;
    align-items: center;
    height: 35px;
}

.grup-kanan .link i {
    font-size: 18px;
    color: var(--secondary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    transition: color 0.3s ease;
}

.grup-kanan .link i:hover {
    color: var(--primary-color);
}

.profile-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border: 2px solid #007bff;
    border-radius: 50%;
    cursor: pointer;
    margin: 0;
}

.circle {
    width: 32px;
    height: 32px;
    background-color: #ccc;
    border-radius: 50%;
    margin: 0;
}

/* Responsive dropdown grid */
@media (max-width: 768px) {
    .dropdown-content .dropdown-grid {
        grid-template-columns: repeat(2, 1fr); /* Mengubah menjadi 2 kolom */ 
    }
}

@media (max-width: 480px) {
    .dropdown-content .dropdown-grid {
        grid-template-columns: repeat(1, 1fr); /* Satu kolom untuk perangkat kecil */ 
    }
}

.dropbtn i {
    font-size: 16px; /* Ukuran ikon dropdown */
    color: var(--secondary-color); /* Warna ikon sesuai dengan teks */
    transition: transform 0.3s ease, color 0.3s ease; /* Tambahkan animasi */
}

/* Efek hover untuk ikon dan teks dropdown */
.dropbtn:hover i {
    transform: rotate(180deg); /* Ikon dropdown akan berputar */
    color: var(--primary-color); /* Warna berubah saat hover */
}

.dropdown-content a {
    float: none;
    color: var(--secondary-color);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    transition: all 0.3s ease;
}

.dropdown-content a:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.dropdown-content.show {
    display: block;
}

/* Tambahkan style berikut untuk dropdown profil */
.dropdown-contentmenu {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    background-color: white;
    min-width: 250px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    border-radius: 8px;
    padding: 15px;
    z-index: 1000;
}

.profile-header {
    display: flex;
    align-items: center;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.profile-pic {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #ccc;
    margin-right: 15px;
}

.profile-info {
    flex-grow: 1;
}

.profile-info h3 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.profile-info p {
    margin: 5px 0;
    font-size: 14px;
    color: #666;
}

.edit-profile {
    color: var(--primary-color);
    text-decoration: none;
    font-size: 14px;
}

.profile-menu {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.profile-menu li {
    padding: 10px 0;
    font-size: 14px;
    color: #333;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.profile-menu li i {
    margin-right: 10px;
    width: 20px;
    color: #666;
}

.profile-menu li:hover {
    color: var(--primary-color);
}

.profile-menu li:hover i {
    color: var(--primary-color);
}

.logout {
    padding-top: 15px;
    border-top: 1px solid #eee;
}

.logout a {
    color: #ff0000;
    text-decoration: none;
    font-size: 14px;
    display: flex;
    align-items: center;
}

.logout a i {
    margin-right: 10px;
}

/* Script untuk menampilkan/menyembunyikan dropdown */
.dropdown-contentmenu.show {
    display: block;
}

/* Dropdown Profile Styles */
.dropdown-contentmenu {
    display: none;
    position: absolute;
    top: 45px;
    right: 20px;
    background-color: white;
    min-width: 250px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    border-radius: 8px;
    padding: 15px;
    z-index: 1000;
    opacity: 0;
    transform: translateY(-10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.dropdown-contentmenu.show {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.grup-kanan {
    position: relative;
}

.profile-icon {
    position: relative;
    cursor: pointer;
    z-index: 1001;
}

.profile-header {
    display: flex;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.profile-pic {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #ccc;
    margin-right: 15px;
}

.profile-info {
    flex-grow: 1;
}

.profile-info h3 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.profile-info p {
    margin: 5px 0;
    font-size: 14px;
    color: #666;
}

.edit-profile {
    color: var(--primary-color);
    text-decoration: none;
    font-size: 14px;
}

.profile-menu {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.profile-menu li {
    padding: 10px 0;
    font-size: 14px;
    color: #333;
    cursor: pointer;
    display: flex;
    align-items: center;
    transition: color 0.2s ease;
}

.profile-menu li i {
    margin-right: 10px;
    width: 20px;
    color: #666;
    transition: color 0.2s ease;
}

.profile-menu li:hover {
    color: var(--primary-color);
}

.profile-menu li:hover i {
    color: var(--primary-color);
}

.logout {
    padding-top: 15px;
    border-top: 1px solid #eee;
}

.logout a {
    color: #ff0000;
    text-decoration: none;
    font-size: 14px;
    display: flex;
    align-items: center;
    transition: opacity 0.2s ease;
}

.logout a:hover {
    opacity: 0.8;
}

.logout a i {
    margin-right: 10px;
}

/* Tambahkan modal alert */
.payment-alert {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 2000;
}

.alert-content {
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    width: 90%;
}

.alert-icon {
    width: 80px;
    height: 80px;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.alert-icon i {
    font-size: 40px;
    color: #666;
}

.alert-content h3 {
    margin: 0 0 10px;
    font-size: 20px;
    font-weight: 600;
}

.alert-content p {
    margin: 0 0 20px;
    color: #666;
    font-size: 14px;
}

.alert-btn {
    background: #0066cc;
    color: white;
    border: none;
    padding: 12px 40px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.3s ease;
}

.alert-btn:hover {
    background: #0052a3;
}

/* Animasi untuk modal */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.payment-alert.show {
    display: flex;
    animation: fadeIn 0.3s ease;
}

.payment-alert.show .alert-content {
    animation: slideIn 0.3s ease;
}

/* Tambahkan modal alert untuk pembayaran berhasil */
<div id="paymentSuccessAlert" class="payment-alert" style="display: none;">
    <div class="alert-content">
        <div class="alert-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h3>Pembayaran Berhasil</h3>
        <p>Cek Pesan pada Email kamu untuk melihat bukti pemesanan dan pembayaran.</p>
        <button class="alert-btn" onclick="closeSuccessAlert()">Tutup</button>
    </div>
</div>

/* Tambahkan CSS untuk alert */
<style>
.payment-alert {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 2000;
}

.alert-content {
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    width: 90%;
}

.alert-icon {
    width: 80px;
    height: 80px;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.alert-icon i {
    font-size: 40px;
    color: #28a745; /* Warna hijau untuk sukses */
}

.alert-content h3 {
    margin: 0 0 10px;
    font-size: 20px;
    font-weight: 600;
}

.alert-content p {
    margin: 0 0 20px;
    color: #666;
    font-size: 14px;
}

.alert-btn {
    background: #0066cc;
    color: white;
    border: none;
    padding: 12px 40px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.3s ease;
}

.alert-btn:hover {
    background: #0052a3;
}
</style>

<!-- /* Tambahkan JavaScript untuk menampilkan alert pembayaran berhasil */ -->
<script>
function showSuccessAlert() {
    const successAlert = document.getElementById('paymentSuccessAlert');
    successAlert.style.display = 'flex'; // Tampilkan modal
}

function closeSuccessAlert() {
    const successAlert = document.getElementById('paymentSuccessAlert');
    successAlert.style.display = 'none'; // Sembunyikan modal
}

// Tambahkan event listener untuk tombol "Cek Status Pembayaran"
document.querySelector('.btn-primary').addEventListener('click', function(e) {
    e.preventDefault();
    showCheckAlert(); // Tampilkan alert menanyakan status pembayaran
});

function checkPaymentStatus(isPaid) {
    const checkAlert = document.getElementById('paymentCheckAlert');
    checkAlert.style.display = 'none'; // Sembunyikan modal

    if (isPaid) {
        showSuccessAlert(); // Tampilkan alert jika sudah bayar
    } else {
        showAlert(); // Tampilkan alert jika belum bayar
    }
}

function showAlert() {
    const alert = document.getElementById('paymentAlert');
    alert.classList.add('show');
    alert.style.display = 'flex'; // Pastikan modal ditampilkan
}
</script>
    
    </style>
</head>
<nav>
        <div class="grup-kiri">
        <div class="nav_logo"><a href="#">Dekat.</a></div>
        <ul class="nav_links">
            <li class="link"><a href="#">Beranda</a></li>
            <li class="dropdown">
                <div class="dropbtn" >Layanan <i class="fas fa-chevron-down"></i></div>
                <div class="dropdown-content" id="myDropdown">
                    <h4>Layanan </h4>
                <div class="dropdown-grid">
                    <a href="#">
                        <div class="dropdown-item">
                            <img src="assets/ace.jpg" alt="Landing Page Image">
                            <h5>Service AC </h5>
                        </div>
                    </a>
                    <a href="#">
                        <div class="dropdown-item">
                            <img src="assets/mekap.jpg" alt="Landing Page Image">
                            <h5>Make Up</h5>
                        </div>
                    </a>
                    <a href="#">
                        <div class="dropdown-item">
                            <img src="assets/mitra.jpg" alt="Landing Page Image">
                            <h5>Mitra</h5>
                        </div>
                    </a>
            </li>
            <li class="link"><a href="#">Tentang Kami</a></li>
        </ul>
        </div>
        <div class="grup-kanan">
            <ul class="nav_links">
            <li class="link"><a href="#"><i class="fa fa-search"></i></a></li>
            <li class="link"><a href="#"><i class="fas fa-comment-alt"></i></a></li>
            <li class="link"><a href="#"><i class="fas fa-bell"></i></a></li>
            <div class="link">
                <!-- Ikon Profil -->
                <div class="profile-icon" onclick="toggleDropdown()">
                    <div class="circle"></div>
                </div>
                
                <!-- Dropdown Menu -->
                <div id="dropdown-menu" class="dropdown-contentmenu">
                    <div class="profile-header">
                        <div class="profile-pic"></div>
                        <div class="profile-info">
                            <h3>Ocin Leonardo</h3>
                            <p>ocinleo@gmail.co.id</p>
                            <a href="#" class="edit-profile">Edit Profil</a>
                        </div>
                    </div>
                    <ul class="profile-menu">
                        <li><i class="fas fa-key"></i> Ganti Kata Sandi</li>
                        <li><i class="fas fa-map-marker-alt"></i> Alamat</li>
                        <li><i class="fas fa-info-circle"></i> Info Pemesanan</li>
                        <li><i class="fas fa-credit-card"></i> Metode Pembayaran</li>
                        <li><i class="fas fa-paint-brush"></i> Tema</li>
                        <li><i class="fas fa-question-circle"></i> Bantuan</li>
                    </ul>
                    <div class="logout">
                        <a href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                    </div>
                </div>
            </div>
        </ul>
        </div>
        
    </nav>
<body>
    <div class="payment-card">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Menunggu Pembayaran</h4>
            <span class="countdown">23:59:09</span>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted mb-1">Nomor Virtual Account</p>
                    <h5 class="mb-0">827292242U939XXXX</h5>
                </div>
                <button class="copy-btn" onclick="copyToClipboard('827292242U939XXXX')">Salin</button>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted mb-1">Total Tagihan</p>
                    <h5 class="mb-0">Rp25.000</h5>
                </div>
                <button class="copy-btn" onclick="copyToClipboard('25000')">Salin</button>
            </div>
        </div>

        <div class="text-end mb-3">
            <p class="text-muted mb-1">Bayar Sebelum</p>
            <p class="text-danger mb-0">Minggu, 13 Januari 2024 - 12:59 WIB</p>
        </div>

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png" alt="BCA Logo" class="bank-logo">

        <div class="divider"></div>

        <ul class="ps-3">
            <li>Penting: Transfer Virtual Account hanya bisa dilakukan dari Bank yang kamu pilih</li>
            <li>Transaksi kamu baru akan diteruskan ke Mitra setelah pembayaran berhasil diverifikasi.</li>
        </ul>

        <!-- Tombol Cek Status Pembayaran -->
        <button class="btn btn-primary w-100 mt-4">Cek Status Pembayaran</button>
    </div>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text);
            alert('Teks telah disalin!');
        }

        // Countdown Timer
        function startTimer(duration, display) {
            var timer = duration, hours, minutes, seconds;
            setInterval(function () {
                hours = parseInt(timer / 3600, 10);
                minutes = parseInt((timer % 3600) / 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = hours + ":" + minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = 0;
                }
            }, 1000);
        }

        window.onload = function () {
            var twentyFourHours = 24 * 60 * 60;
            var display = document.querySelector('.countdown');
            startTimer(twentyFourHours, display);
        };

        function toggleDropdown() {
            const dropdown = document.getElementById("dropdown-menu");
            dropdown.classList.toggle("show");
            
            // Menutup dropdown ketika mengklik di luar
            document.addEventListener('click', function(event) {
                const isClickInside = dropdown.contains(event.target) || 
                                    event.target.closest('.profile-icon');
                
                if (!isClickInside && dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            });
        }

        // Hentikan event propagation pada dropdown
        document.getElementById("dropdown-menu").addEventListener('click', function(event) {
            event.stopPropagation();
        });

        function showAlert() {
            const alert = document.getElementById('paymentAlert');
            alert.classList.add('show');
            alert.style.display = 'flex'; // Pastikan modal ditampilkan
        }

        function closeAlert() {
            const alert = document.getElementById('paymentAlert');
            alert.classList.remove('show');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 300);
        }

        // Tambahkan event listener untuk tombol "Cek Status Pembayaran"
        document.querySelector('.btn-primary').addEventListener('click', function(e) {
            e.preventDefault();
            // Simulasi pengecekan status pembayaran
            const paymentStatus = false; // false = belum bayar, true = sudah bayar
            
            if (!paymentStatus) {
                showAlert(); // Tampilkan alert jika belum bayar
            } else {
                alert('Pembayaran sudah dilakukan.');
            }
        });
    </script>

    
    <!-- Modal untuk menanyakan status pembayaran -->
    <div id="paymentCheckAlert" class="payment-alert" style="display: none;">
        <div class="alert-content">
            <div class="alert-icon">
                <i class="fas fa-question-circle"></i>
            </div>
            <h3>Apakah Anda Sudah Melakukan Pembayaran?</h3>
            <p>Jika sudah, silakan klik "Ya". Jika belum, klik "Tidak".</p>
            <button class="alert-btn" onclick="checkPaymentStatus(true)">Ya</button>
            <button class="alert-btn" onclick="checkPaymentStatus(false)">Tidak</button>
        </div>
    </div>

    <!-- Modal untuk pembayaran berhasil -->
    <div id="paymentSuccessAlert" class="payment-alert" style="display: none;">
        <div class="alert-content">
            <div class="alert-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3>Pembayaran Berhasil</h3>
            <p>Cek Pesan pada Email kamu untuk melihat bukti pemesanan dan pembayaran.</p>
            <button class="alert-btn" onclick="closeSuccessAlert()">Tutup</button>
        </div>
    </div>

    <!-- Modal untuk pembayaran belum dilakukan -->
    <div id="paymentAlert" class="payment-alert" style="display: none;">
        <div class="alert-content">
            <div class="alert-icon">
                <i class="far fa-clock"></i>
            </div>
            <h3>Lanjutkan Proses Pembayaran</h3>
            <p>Pembayaran belum dilakukan, harap segera melakukan proses pembayaran.</p>
            <button class="alert-btn" onclick="closeAlert()">Tutup</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
    function showCheckAlert() {
        const checkAlert = document.getElementById('paymentCheckAlert');
        checkAlert.style.display = 'flex'; // Tampilkan modal
    }

    function checkPaymentStatus(isPaid) {
        const checkAlert = document.getElementById('paymentCheckAlert');
        checkAlert.style.display = 'none'; // Sembunyikan modal

        if (isPaid) {
            showSuccessAlert(); // Tampilkan alert jika sudah bayar
        } else {
            showAlert(); // Tampilkan alert jika belum bayar
        }
    }

    // Tambahkan event listener untuk tombol "Cek Status Pembayaran"
    document.querySelector('.btn-primary').addEventListener('click', function(e) {
        e.preventDefault();
        showCheckAlert(); // Tampilkan alert menanyakan status pembayaran
    });
    </script>
</body>
</html>
