<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setiles.css?v=1.1">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Dekat.</title>
</head>
<body>
    <nav>
        <div class="grup-kiri">
        <div class="nav_logo"><a href="#">Dekat.</a></div>
        <ul class="nav_links">
            <li class="link"><a href="index.php">Beranda</a></li>
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
    </nav>
        </div>
        <div class="about-section">
            <h1>Tentang Kami</h1>
            <p>Dekat adalah sebuah layanan jasa digital dari Disnaker Kota Depok yang berfungsi untuk mencari layanan jasa dan membantu masyarakat di Kota Depok, para mitra yang tergabung sebagai pemberi jasa adalah Mitra yang Berpengalaman, Profesional Bergaransi dan Bersertifikat resmi dari pelatihan BNSP.</p>
        </div>
        <div class="about-image">
            <img src="assets/jempol.jpg" alt="about-image">
        </div>
    <footer>
        <p>&copy; 2024 Dekat. All rights deserved.</p>
    </footer>
    
</body>
