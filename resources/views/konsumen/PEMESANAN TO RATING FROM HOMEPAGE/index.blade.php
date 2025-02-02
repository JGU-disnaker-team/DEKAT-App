<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                    <a href="pemesanan.php">
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
    <div class="container-jasa">
    <form id="searchForm">
        <!-- Dropdown Jasa -->
        <label for="service">Pilih Jasa:</label>
        <select id="service" name="service">
          <option value="web_design">Service AC</option>
          <option value="digital_marketing">Make Up</option>
          <option value="graphic_design">Barber Shop</option>
          <option value="consulting">Konsultasi UMKM</option>
          <!-- Tambahkan jasa lainnya sesuai kebutuhan -->
        </select>
        
        <!-- Dropdown Lokasi -->
        <label for="location">Pilih Lokasi:</label>
        <select id="location" name="location">
          <option value="jakarta">Jakarta</option>
          <option value="bandung">Bandung</option>
          <option value="surabaya">Surabaya</option>
          <option value="bali">Bali</option>
          <!-- Tambahkan lokasi lainnya sesuai kebutuhan -->
        </select>
        
        <!-- Tombol untuk mencari -->
        <button type="submit">Cari</button>
    </form>
    </div>
    <div class="nav_image">
        <img src="assets/banner.jpg" alt="Landing Page Image">
        <div class="content_container">
            <h1>
                Hai, Selamat Datang!<br></h1>
                <span>Kini Dekat Telah Hadir ayo coba dan jelajahi bersama</span>
        </div>
    </div>
    </section>
    <div class="layanan-section" >
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="500">
            <a href="pemesananafterlogin.blade.php">
        <img src="assets/ace.jpg" alt="">
            </a>
            <h3>Service AC</h3>
            <p>Menyediakan pembersihan AC, Servis dan pengisian ulang freon, perbaikan dan instalasi AC, DLL</p>
        </div>
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="assets/mekap.jpg" alt="" a href="pemesanan.php">
            <h3>Make Up</h3>
            <p>Menyediakan Makeup Pengantin, Makeup untuk acara khusus, Makeup harian atau Casual, DLL</p>
        </div>
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="assets/barber.jpg" alt="" a href="#">
            <h3>Barber Shop</h3>
            <p>Menyediakan Potong Rambut, Cukur Jenggot dan kumis, Pewarnaan Rambut, Styling Rambut, DLL</p>
        </div>
    </div>
    <!-- <div class="about-us">
        <img src="assets/Dekat..png" alt="">
    </div> -->
    <section class="company-profile">
        <div class="profile-info" data-aos="fade-up" data-aos-duration="1000">
            <h1>Dekat.</h1>
            <p class="tagline">Depok Layanan Ekonomis dan Jasa Terpercaya</p>
            <p class="description">
                Kami memahami bahwa setiap orang membutuhkan solusi yang tidak hanya cepat, tetapi juga terjangkau dan dapat dipercaya. 
                <br>Dengan komitmen untuk memberikan layanan terbaik kepada masyarakat Depok dan sekitarnya, 
                <br>kami hadir untuk memenuhi berbagai kebutuhan Anda dengan cara yang paling efisien dan efektif.
            </p>
            <a href="#learn-more" class="btn-learn-more">Pesan Sekarang Juga !</a>
        </div>
    </section>
    <section class="testimonials">
        <h1 data-aos="fade-right"  data-aos-duration="1000"
        data-aos-easing="ease-in-sine">
        Kata Mereka ?</h1>
        <div class="testimonial" data-aos="fade-left" data-aos-duration="1000">
                <div class="testimonial-image">
                <img src="assets/testi.jpg" alt="Hendry">
            </div>
            <div class="testimonial-text" >
                <p class="quote">Pekerjaan rapih banget, tukang dan mandornya juga ramah banget. Terus enak juga minta pendapat / saran ke mereka, untuk masalah harga sesuai kualitas kerja dan juga bisa nego. Pokoknya mantap Mas Tukang.</p>
                <p class="name">Vincent</p>
            </div>
        </div>
        <div class="testimonial" data-aos="fade-left" data-aos-duration="1000">
            <div class="testimonial-image">
                <img src="assets/testimo.jpg" alt="Dodid Wijanarko">
            </div>
            <div class="testimonial-text">
                <p class="quote">AP Arsitektur, sangat brillian dalam mengembangkan ide dan memberikan solusi dalam merenovasi rumah yang di sesuaikan dengan keterbatsan dana. saya sangat merekomendasikan kepada siapapun untuk menggunakan jasa AP Arsitektur</p>
                <p class="name">Muhammmad Sumbul</p>
            </div>
        </div>
    </section>
</section>
<h2 class="judul-mitra" data-aos="fade-up">DAFTAR MITRA</h2>
<style>
        h2.judul-mitra {
            font-size: 40px;
            text-align: center;
            color: #073BBE;
        }
    </style>
<div class="layanan-section">
    
    <div class="layanan-item" data-aos="fade-up" data-aos-duration="500">
        <img src="assets/mitraac.png" alt="" a href="#">
        <h3>Sejuk-aC</h3>
        <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, dolorum?</p> -->
    </div>
    <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <img src="assets/mitramekap.png" alt="" a href="#">
        <h3>Evie MUA</h3>
        <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, dolorum?</p> -->
    </div>
    <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
        <img src="assets/hairnerds.jpg" alt="" a href="#">
        <h3>Hairneds Studio</h3>
        <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, dolorum?</p> -->
    </div>
</div>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-contact">
            <h4>Hubungi Kami</h4>
            <div class="contact-info">
                <!-- Email -->
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:contact@example.com">disnakerkotadepok@gmail.com</a>
                </div>
                <!-- Instagram -->
                <div class="contact-item">
                    <i class="fab fa-instagram"></i>
                    <strong></strong>
                    <a href="https://www.instagram.com/yourprofile" target="_blank">Instagram</a>
                </div>
                <!-- Telepon -->
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <strong></strong>
                    <a href="tel:+1234567890">021-111-xxx</a>
                </div>
            </div>
            <div class="footer-address">
                <div><i class="fas fa-map-marker-alt"></i> <strong></strong> JL. Margonda Raya No.54, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431</div>
            </div>
        </div>
    </div>
</footer>
</head>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
<script>
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