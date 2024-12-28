@extends('layouts.app')
@section('content')
    <nav>
        <div class="grup-kiri">
            <div class="nav_logo"><a href="#">Dekat.</a></div>
            <ul class="nav_links">
                <li class="link"><a href="#">Beranda</a></li>
                <li class="dropdown">
                    <div class="dropbtn">Layanan <i class="fas fa-chevron-down"></i></div>
                    <div class="dropdown-content" id="myDropdown">
                        <h4>Layanan </h4>
                        <div class="dropdown-grid">
                            <a href="pemesanan.php">
                                <div class="dropdown-item">
                                    <img src="public/image/ace.jpg" alt="Landing Page Image">
                                    <h5>Service AC </h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="dropdown-item">
                                    <img src="public/image/mekap.jpg" alt="Landing Page Image">
                                    <h5>Make Up</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="dropdown-item">
                                    <img src="public/image/mitra.jpg" alt="Landing Page Image">
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
        <img src="public/image/banner.jpg" alt="Landing Page Image">
        <div class="content_container">
            <h1>
                Hai, Selamat Datang!<br></h1>
            <span>Kini Dekat Telah Hadir ayo coba dan jelajahi bersama</span>
        </div>
    </div>
    </section>
    <div class="layanan-section">
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="500">
            <a href="pemesanan.php">
                <img src="public/image/ace.jpg" alt="">
            </a>
            <h3>Service AC</h3>
            <p>Menyediakan pembersihan AC, Servis dan pengisian ulang freon, perbaikan dan instalasi AC, DLL</p>
        </div>
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="public/image/mekap.jpg" alt="" a href="pemesanan.php">
            <h3>Make Up</h3>
            <p>Menyediakan Makeup Pengantin, Makeup untuk acara khusus, Makeup harian atau Casual, DLL</p>
        </div>
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="public/image/barber.jpg" alt="" a href="#">
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
                Kami memahami bahwa setiap orang membutuhkan solusi yang tidak hanya cepat, tetapi juga terjangkau dan dapat
                dipercaya.
                <br>Dengan komitmen untuk memberikan layanan terbaik kepada masyarakat Depok dan sekitarnya,
                <br>kami hadir untuk memenuhi berbagai kebutuhan Anda dengan cara yang paling efisien dan efektif.
            </p>
            <a href="#learn-more" class="btn-learn-more">Pesan Sekarang Juga !</a>
        </div>
    </section>
    <section class="testimonials">
        <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
            Kata Mereka ?</h1>
        <div class="testimonial" data-aos="fade-left" data-aos-duration="1000">
            <div class="testimonial-image">
                <img src="public/image/testi.jpg" alt="Hendry">
            </div>
            <div class="testimonial-text">
                <p class="quote">Pekerjaan rapih banget, tukang dan mandornya juga ramah banget. Terus enak juga minta
                    pendapat / saran ke mereka, untuk masalah harga sesuai kualitas kerja dan juga bisa nego. Pokoknya
                    mantap Mas Tukang.</p>
                <p class="name">Vincent</p>
            </div>
        </div>
        <div class="testimonial" data-aos="fade-left" data-aos-duration="1000">
            <div class="testimonial-image">
                <img src="public/image/testimo.jpg" alt="Dodid Wijanarko">
            </div>
            <div class="testimonial-text">
                <p class="quote">AP Arsitektur, sangat brillian dalam mengembangkan ide dan memberikan solusi dalam
                    merenovasi rumah yang di sesuaikan dengan keterbatsan dana. saya sangat merekomendasikan kepada siapapun
                    untuk menggunakan jasa AP Arsitektur</p>
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
            <img src="public/image/mitraac.png" alt="" a href="#">
            <h3>Sejuk-aC</h3>
            <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, dolorum?</p> -->
        </div>
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="public/image/mitramekap.png" alt="" a href="#">
            <h3>Evie MUA</h3>
            <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, dolorum?</p> -->
        </div>
        <div class="layanan-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="public/image/hairnerds.jpg" alt="" a href="#">
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
                    <div><i class="fas fa-map-marker-alt"></i> <strong></strong> JL. Margonda Raya No.54, Depok, Kec.
                        Pancoran Mas, Kota Depok, Jawa Barat 16431</div>
                </div>
            </div>
        </div>
    </footer>
