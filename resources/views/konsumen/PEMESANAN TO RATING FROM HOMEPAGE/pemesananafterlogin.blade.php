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
                                <a href="editprofile.blade.php" class="edit-profile">Edit Profil</a>
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
    <div class="nav_image">
        <img src="assets/banner.jpg" alt="Landing Page Image">
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
                <h2 class="options-title">Pilih layanan:</h2>
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

nav {
    position: relative;
    max-width: var(--max-width);
    margin: auto;
    padding: 1rem;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Logo Styles */
.nav_logo a {
    margin-right: auto;
    font-size: 45px;
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
    gap: 12rem;
    flex-grow: 1;
}

.grup-kanan {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    /* gap: 0.1rem; */
    margin-left: -100px;
    /* outline: 1px solid red; */
}

.nav_links .link {
    display: flex;
    align-items: center;
}

/* Menghapus redundansi dengan menggabungkan .nav_links .link a dan .link a */
.nav_links .link a {
    padding: 0.5rem 0.5rem;
    font-size: 20px;
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
.grup-kanan .icon {
    display: flex;
    align-items: center; /* Pastikan ikon rata secara vertikal */
    justify-content: center;
    width: 35px; /* Ukuran yang sama dengan ikon profil */
    height: 35px;
}

.profile-icon {
    top: 10px;
    right: 20px;
    display: flex;
    width: 35px;
    height: 34px;
    border: 2px solid #007bff;
    border-radius: 50%;
    cursor: pointer;
    margin: 0;
    /* outline: 5px solid green; */
}

.circle {
    top: 10px;
    right: 20px;
    width: 35px;
    height: 30px;
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

/* Image Section */
.nav_image {
    position: relative;
    width: 100%;
    max-width: 1361px;
    height: 498px;
    margin: 0 auto;
    overflow: hidden;
}

.nav_image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Text Overlay */
.text-overlay {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    z-index: 10;
    text-align: center;
    width: 90%;
    max-width: 800px;
}

.text-overlay h1 {
    font-size: 36px;
    margin: 0;
    border-radius: 100px;
    font-weight: bold;
    padding: 0.5rem 1.5rem;
    border: 2px solid  var(--primary-color);
    display: inline-block;
}

.text-overlay span {
    font-size: 18px;
    display: block;
    margin-top: 10px;
}

.container {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 2rem 1rem;
    position: relative;
    z-index: 2; /* Memastikan konten berada di atas gambar */
}

.content_container {
    text-align: center;
    margin-bottom: 2rem; /* Jarak antara teks dan gambar */
}

.content_container h1 {
    font-size: 2.5rem;
    color: var(--secondary-color);
    margin-bottom: 1rem;
    font-weight: 700;
}

.content_container span {
    display: block;
    font-size: 1.2rem;
    color: var(--white-color);
    opacity: 0.8;
    line-height: 1.5;
}

/* Container Image dan Text */
.nav_image {
    position: relative;
    width: 100%;
    max-width: 1361px;
    height: 498px;
    margin: 0 auto;
    overflow: hidden;
}

.nav_image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Text Overlay Styles */
.content_container {
    position: absolute;
    bottom: 40px;  /* Jarak dari bawah */
    left: 40px;    /* Jarak dari kiri */
    z-index: 2;
    text-align: left;
    max-width: 600px; /* Maksimum lebar teks */
}

.content_container h1 {
    font-size: 2.8rem;
    color: var(--white-color);
    font-weight: 700;
    margin-bottom: 1rem;
    opacity: 0.9; /* Sedikit transparan */
    line-height: 1.2;
    padding: 0.5rem 1rem; /* Ruang di dalam border */
    border: 2px solid var(--primary-color); /* Tambahkan border */
    border-radius: 8px; /* Membulatkan sudut */
    background-color: var(--primary-color); /* Isi penuh dengan warna utama */
    display: inline-block; /* Pastikan border melingkupi teks */
}

.content_container span {
    display: block;
    font-size: 1.2rem;
    color: var(--white-color);
    opacity: 0.7; /* Lebih transparan dari judul */
    line-height: 1.5;
    font-weight: 400;
}

/* Optional: Menambahkan gradient overlay untuk memastikan teks tetap terbaca */
.nav_image::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent);
    pointer-events: none;
}

/* Responsive Design */
@media (max-width: 768px) {
    .content_container {
        bottom: 20px;
        left: 20px;
        max-width: 80%;
    }

    .content_container h1 {
        font-size: 2rem;
    }

    .content_container span {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .content_container {
        bottom: 20px;
        left: 20px;
    }

    .content_container h1 {
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
    }

    .content_container span {
        font-size: 0.9rem;
    }

    .nav_image {
        height: 350px;
    }
}

.layanan-section {
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
}
.layanan-item {
    text-align: center;
    width: 50%;
}

.layanan-item:hover {
    transform: scale(1);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.layanan-item img {
    width: 100%;
    max-width: 350px;
    height: 220px;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.layanan-item:hover img {
    transform: scale(1.1);
}

.layanan-item h3 {
    font-size: 1.5rem;
    margin: 10px 0;
}
.layanan-item p {
    font-size: 1em;
    color: #555;
}

/* Dropdown Menu */
.dropdown-contentmenu {
    display: none;
    position: absolute;
    top: 50px; /* Jarak dari ikon profil */
    right: 0;
    width: 300px;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    z-index: 1000;
    overflow: hidden;
}

/* Header Dropdown */
.dropdown-contentmenu .profile-header {
    display: flex;
    align-items: center;
    padding: 15px;
    border-bottom: 1px solid #e0e0e0;
}

.dropdown-contentmenu .profile-pic {
    width: 50px;
    height: 50px;
    background-color: #ccc;
    border-radius: 50%;
    margin-right: 15px;
}

.dropdown-contentmenu .profile-info h3 {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}


.dropdown-contentmenu .profile-info p {
    font-size: 14px;
    color: #666;
}

.profile-info .edit-profile {
font-size: 10px;
text-decoration: none;
}


.dropdown-contentmenu .edit-profile {
    font-size: 120px;
    text-decoration: none;
    color: var(--primary-color) !important;
    text-align: left !important;
    text-align-last: left;
    display: block;
    margin-right: 30px;
}

.dropdown-contentmenu .edit-profile:hover {
    text-decoration: underline;
    color: var(--primary-color) !important;
}


/* Menu Items */
.dropdown-contentmenu .profile-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.dropdown-contentmenu .profile-menu li {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    font-size: 14px;
    color: #333;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.dropdown-contentmenu .profile-menu li:hover {
    background-color: #f0f0f0;
}

.dropdown-contentmenu .profile-menu li i {
    margin-right: 10px;
    font-size: 16px;
    color: #666;
}

/* Logout Button */
.dropdown-contentmenu .logout {
    padding: 10px 15px;
    text-align: center;
}

.dropdown-contentmenu .logout a {
    font-size: 14px;
    color: #ff4d4d;
    text-decoration: none;
}

.dropdown-contentmenu .logout a:hover {
    text-decoration: underline;
}

/* Show Dropdown */
.dropdown-contentmenu.show {
    display: block;
    /* background-color: red; */
}

.company-profile {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
}

.profile-container {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    max-width: 900px;
    width: 100%;
}

.profile-info {
    text-align: center;
    padding-left: 20px;
    padding-right: 20px;
  }
  
  
.profile-info h1 {
    font-size: 2em;
    margin-bottom: 5px;
    color: var(--primary-color);
}

.profile-info .tagline {
    font-size: 1.2em;
    color: #777;
    margin-bottom: 15px;
}

.profile-info .description {
    font-size: 1em;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}
</style>
<a href="pesanan.blade.php">
    <button onclick="myFunction()" class="service-button">Pasang</button>
</a>
</a>
<script>
unction myFunction() {
alert("Apakah Anda Sudah Login?");
}
function toggleDropdown() {
    const dropdown = document.querySelector(".dropdown-contentmenu");
    console.log("Dropdown element:", dropdown); // Debugging
    if (dropdown) {
        dropdown.classList.toggle("show");
        console.log("Class 'show' status:", dropdown.classList.contains("show")); // Debugging
    } else {
        console.log("Dropdown element not found");
    }
}

window.onclick = function (event) {
    console.log("Window clicked:", event.target); // Debugging klik
    if (!event.target.closest('.profile-icon') && !event.target.closest('.dropdown-contentmenu')) {
        const dropdown = document.querySelector(".dropdown-contentmenu");
        if (dropdown && dropdown.classList.contains("show")) {
            console.log("Closing dropdown...");
            dropdown.classList.remove("show");
        }
    }
};
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
    