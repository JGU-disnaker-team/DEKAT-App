<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pemesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
            <li class="link"><a href="#"><i class="fa fa-search"></i></a></li> <!-- Search Icon -->
            <li class="link"><a href="#"><i class="fas fa-comment-alt"></i></a></li> <!-- Profile Icon -->
            <li class="link"><a href="#"><i class="fas fa-bell"></i></a></li> <!-- Profile Icon -->
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
                        <hr>
                        <div class="logout">
                            <a href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                        </div>
                    </div>
                </div>
            </a></li>
        </ul>
        </div>
    </nav>

    <!-- Judul Info Pemesanan -->
    <div class="info-pemesanan">
        <h1>Info Pemesanan</h1>
        <hr class="divider">
    </div>

    <!-- Tab Status -->
    <!-- Tab Status -->
    <div class="tab-status">
        <a href="infopemesanan.blade.php">
            <button class="tab-button ">Menunggu</button>
        </a>
        <a href="proseswaiting.blade.php">
            <button class="tab-button active">Sedang Proses</button>
        </a>
        <a href="selesaipembayaran.blade.php">
            <button class="tab-button">Selesai</button>
        </a>
        <a href="riwayatpemesanan.blade.php">
            <button class="tab-button">Riwayat</button>
        </a>
    </div>

    <!-- Bagian Utama -->
    <div class="main-container">
        <!-- Bagian Informasi Pemesanan -->
        <div class="order-info">
            <h2>No Pesanan: 1343456563 Telah Selesai</h2>
            <p>Nama: Ocin Leonardo</p>
            <p>Alamat: Pasir Putih Sawangan Kota Depok</p>
            <p>No Handphone: +628173283282</p>
            <h3>Jenis Pesanan:</h3>
            <ul>
                <li>Service</li>
                <li>Split AC</li>
                <li>Samsung</li>
                <li>2 Unit</li>
                <li>1 pk</li>
            </ul>
            <p>Tanggal: 13 Januari 2025 - 13:00 WIB</p>
        </div>

        <!-- Bagian Biaya Tambahan -->
        <div class="additional-costs">
            <h2>Biaya Tambahan</h2>
            <ul>
                <li>Biaya Reservasi: 1x Rp25.000</li>
                <li>Cuci AC: 2x Rp50.000</li>
                <li>Ganti Freon: 1x Rp150.000</li>
                <li><strong>Total Pembayaran: Rp250.000</strong></li>
            </ul>
            <label>
                <input type="checkbox"> Saya Menyetujui Biaya tambahan
            </label>
            <div class="button-container">
                <a href="pembayaraninfopemesanan.blade.php">
                    <button class="pay-button">Bayar</button>
                </a>
            </div>
        </div>
    </div>
    <div class="background">
        <img src="assets/bg-pemesanan.png" alt="" class="bg-image">
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    /* Navbar Styles */
    :root {
    --primary-color: #073BBE;
    --secondary-color: #333;
    --white-color: #f9f9f9;
    --max-width: 1200px;
}
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

body {
    font-family: 'Montserrat', sans-serif; /* Terapkan font Montserrat */
}

nav {
    /* ... existing styles ... */
}

.nav_links a {
    font-family: 'Montserrat', sans-serif; /* Terapkan font Montserrat pada link */
}

/* Tambahkan aturan CSS lainnya sesuai kebutuhan */




.info-pemesanan {
    text-align: left;
    margin: 20px 0;
}

.info-pemesanan h1 {
    color: #073BBE;
    font-weight: bold;
}

.divider {
    border: none;
    height: 2px;
    background-color: blue;
    margin: 10px auto;
    width: 50%;
}

.tab-status {
    display: flex;
    gap: 10px;
    margin-top: 20px;
}

.tab-button {
    background-color: #e0e0e0;
    color: black;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.tab-button.active {
    background-color: #073BBE;
    color: white;
}

.tab-button:hover {
    background-color: #d0d0d0;
}

.price, .total-price {
    color: green; /* Warna untuk harga */
    font-weight: bold; /* Menebalkan teks harga */
}

.order-info, .additional-costs {
    margin: 20px;
    padding: 15px;
    background-color: white;
    border-radius: 8px;
    
}

.additional-costs h2 {
    margin-bottom: 10px;
}

.additional-costs ul {
    list-style-type: none;
    padding: 0;
}

.additional-costs li {
    margin: 5px 0;
}

.pay-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.pay-button:hover {
    background-color: #0056b3;
}

.checkbox-label {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.main-container {
    display: flex;
    justify-content: space-between; /* Memastikan kedua bagian berada di sisi yang berlawanan */
    margin: 20px; /* Margin untuk keseluruhan container */
}

.order-info {
    flex: 1; /* Mengizinkan order-info untuk mengambil ruang yang tersedia */
    margin-right: 20px; /* Jarak antara order-info dan additional-costs */
}

.additional-costs {
    width: 300px; /* Atur lebar untuk additional-costs */
    background-color: white; /* Warna latar belakang */
    padding-right: 500px;
    border-radius: 8px; /* Sudut melengkung */
}

.button-container {
    margin-top: 20px; /* Jarak atas untuk memindahkan tombol ke bawah */
    display: flex;
    justify-content: flex-end; /* Mengatur tombol ke kanan */
}

.background {
    position: absolute;
    right: 0;
    top: 300px;
    height: 50%;
    width: auto;
}

.bg-image {
    height: 100%;
    width: auto;
}
</style>