<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stel.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Dekat.</title>
</head>
<body>
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
            <li class="link"><a href="aboutus.php">Tentang Kami</a></li>
        </ul>
        </div>
        <div class="grup-kanan">
            <ul class="nav_links">
            <li class="link"><a href="#"><i class="fa fa-search"></i></a></li> <!-- Search Icon -->
            <li class="link"><a href="#"><i class="fa fa-user"></i></a></li> <!-- Profile Icon -->
            <li class="link"><a href="login.php" class="nav_btn">Masuk</a></li>
        </ul>
        </div>
    </nav>
    <div class="nav_image">
        <img src="assets/banner.jpg" alt="Landing Page Image">
        <div class="content_container">
            <h1>
                Hai, Selamat Datang!<br></h1>
                <span>Kini Dekat Telah Hadir ayo coba dan jelajahi bersama</span>
        </div>
    </div>
        <div class="pemesanan">
        <!-- Main Content -->
        <div class="main-content">
            <!-- Service Info Section -->
            <div class="service-info">
                <h1 class="service-title">Service AC</h1>
                <img src="assets/image.png" alt="AC Service" class="service-image">
                <p class="service-description">
                Service AC Dekat dapat melayani berbagai masalah pada AC dengan cepat, tepat dan profesional
                </p>
            </div>

            <!-- Service Options Section -->
            <div class="service-options">
                <h2 class="options-title">Pilih layanan</h2>
                <a href="pesanan.php">
                    <style>
                        .options-title {
    text-align: center;
    color: white;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 50px;
    outline: 15px solid #FF7F3E;
    border-radius: 2px;
    background-color: #FF7F3E;
}
                    </style>
                <button onclick="myFunction()" class="service-button">Pasang</button >
                </a>
                <script>
                function myFunction() {
                alert("Apakah Anda Sudah Login?");
                }
                </script>
                <a href="pesanan.php">
                 <button class="service-button">Service</button>
                </a>
                 <a href="pesanan.php">
                <button class="service-button">Perawatan</button>
                </a>
            </div>
        </div>
        <div class="alert">
        alert("apakah anda sudah Login?");
        </div>
</body>
</html>
    