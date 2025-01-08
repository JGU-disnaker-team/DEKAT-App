<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<script src="https://kit.fontawesome.com/58c31d4a0e.js" crossorigin="anonymous"></script>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
        }

        body {
            background-color: #F8F9FE;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background: #00137F;
            padding: 0.8rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            color: #0047FF;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            margin-left: 3rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }

        .nav-links a.active {
            color: #f0ad4e;
        }

        .nav-icons {
            display: flex;
            gap: 1.5rem;
            color: white;
        }

        /* Profile Dropdown Styles (from beranda page) */
        .profile-dropdown {
            position: relative;
            display: inline-block;
        }

        .profile-content {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background: white;
            min-width: 300px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            margin-top: 1rem;
        }

        .profile-content.show {
            display: block;
        }

        .profile-header {
            padding: 1.5rem;
            border-bottom: 1px solid #E5E7EB;
        }

        .profile-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1F2937;
            margin-bottom: 1rem;
        }

        .profile-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .profile-pic {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #E5E7EB;
        }

        .profile-name {
            font-weight: bold;
            color: #1F2937;
        }

        .profile-email {
            color: #6B7280;
            font-size: 0.9rem;
        }

        .edit-profile {
            color: #0047FF;
            font-size: 0.875rem;
            text-decoration: none;
        }

        .profile-menu {
            padding: 0.5rem 0;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 1.5rem;
            color: #1F2937;
            text-decoration: none;
            transition: background 0.2s;
        }

        .menu-item:hover {
            background: #F3F4F6;
        }

        .menu-item i {
            color: #6B7280;
            width: 20px;
        }

        .close-button {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            cursor: pointer;
            color: #6B7280;
        }

        /* Notification Dropdown Styles */
        .notification-dropdown {
            position: relative;
            display: inline-block;
        }

        .notification-content {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background: white;
            min-width: 300px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            margin-top: 1rem;
        }

        .notification-content.show {
            display: block;
        }

        .notification-header {
            padding: 1rem;
            border-bottom: 1px solid #E5E7EB;
            font-weight: bold;
            font-size: 1.25rem;
            color: #1F2937;
        }

        .notification-list {
            list-style: none;
            padding: 0;
            margin: 0;
            max-height: 200px;
            overflow-y: auto;
        }

        .notification-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 1.5rem;
            color: #1F2937;
            text-decoration: none;
            transition: background 0.2s;
        }

        .notification-item:hover {
            background: #F3F4F6;
        }

        .notification-item i {
            color: #6B7280;
            width: 20px;
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .see-all {
            display: block;
            padding: 1rem;
            text-align: center;
            color: #0047FF;
            font-size: 0.9rem;
            text-decoration: none;
            border-top: 1px solid #E5E7EB;
        }

        .see-all:hover {
            background: #F3F4F6;
        }

        .user-greeting {
            display: flex;
            align-items: center;
            padding: 2rem 2.5rem;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .user-greeting img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 1.5rem;
        }

        .user-greeting .text {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .user-greeting .text h2 {
            font-size: 1.75rem;
            color: #000000;
            margin-bottom: 0.25rem;
            font-weight: bold;
        }

        .user-greeting .text p {
            font-size: 1rem;
            color: #555;
            line-height: 1,4;
        }

        .main-content {
            flex: 1;
            padding: 2rem;
        }

        .container {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .section-title {
            font-size: 1.5rem;
            color: #00137F;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 1.5rem;
        }

        .card.saldo-info {
            background-color: #f8f8f8;
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .card.saldo-info h3 {
            font-size: 1.25rem;
            color: #00137F;
            margin: 0;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .saldo-info .link {
            color: #0056b3;
            text-decoration: none;
            font-size: 1rem;
        }

        .saldo-info .balance-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .saldo-info .balance {
            font-size: 2.5rem;
            font-weight: bold;
            color: #00137F;
        }

        .status {
            background: #f0ad4e;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            font-size: 0.875rem;
            display: inline-block;
        }

        .order-box {
            background-color: #f8f8f8;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .order-box h3 {
            font-size: 1.25rem;
            color: #00137F;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .order-item-box {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            position: relative;
            border: 1px solid #e0e0e0;
        }

        .order-date {
            display: block;
            font-size: 1.25rem;
            color: #00137F;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .order-date i {
            margin-left: 0.5rem;
        }

        .order-details {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .order-name {
            font-size: 1.25rem;
            font-weight: bold;
            color: #00137F;
        }

        .order-location {
            font-size: 1rem;
            color: #666;
        }

        .order-location i {
            margin-right: 0.5rem;
            color: #00137F;
        }

        .selengkapnya {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            color: #0047FF;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: bold;
        }

        .selengkapnya:hover {
            text-decoration: underline;
        }

        
        .table-container {
            overflow-x: auto;
        }

        .table-container h3 {
            margin-top: 2rem;
            font-size: 1.5rem;
            color: #00137F;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #00137F;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        .status.proses {
            background-color: #28a745;
        }

        .status.selesai {
            background-color: #007bff;
        }

        @media (max-width: 768px) {
        .nav-links{
            display: none;
        }

        .user-greeting {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 2rem 1.5rem;  /* Adjusted padding for mobile */
        }

        .user-greeting img {
            margin-bottom: 1.5rem;
            margin-right: 0;  /* Remove right margin on mobile */
        }

        .user-greeting .text {
            align-items: center;
        }

        .user-greeting .text h2 {
            font-size: 1.5rem;  /* Slightly smaller on mobile */
        }

        .card.saldo-info {
            padding: 1rem;
        }
        
        .saldo-info .balance {
            font-size: 1.25rem;
        }

        .order-item-box {
        padding: 1rem;
        }
        
        .selengkapnya {
            position: static;
            margin-top: 1rem;
            display: block;
        }
        
        .order-date {
            font-size: 1rem;
        }
        }


    </style>
</head>
<body>
    <nav>
        <a href="beranda.php" class="brand">Dekat</a>
        <div class="nav-links">
            <a href="beranda.php" class="active">Dashboard</a>
            <a href="jadwal.php">Jadwal</a>
            <a href="saldoku.php">Saldoku</a>
            <a href="riwayat.php">Riwayat</a>
        </div>

        <div class="nav-icons">
            <i class="fa-regular fa-comment"></i>

            <div class="notification-dropdown">
                <i class="fa-regular fa-bell" id="notificationButton"></i>
                <div class="notification-content" id="notificationDropdown">
                    <button class="close-button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="notification-header">
                        <h3>Notifikasi</h3>
                    </div>
                    <ul class="notification-list">
                        <li class="notification-item">
                        <i class="fa-regular fa-envelope"></i>    
                            Tidak Ada Notifikasi.
                        </li>
                    </ul>
                    <a href="#" class="see-all">Lihat semua notifikasi</a>
                </div>
            </div>          

            <div class="profile-dropdown">
                <i class="fa-regular fa-user" id="profileButton"></i>
                <div class="profile-content" id="profileDropdown">
                    <button class="close-button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="profile-header">
                        <h3 class="profile-title">Profil</h3>
                        <div class="profile-info">
                            <img src="/api/placeholder/48/48" alt="Profile" class="profile-pic">
                            <div>
                                <div class="profile-name">PT Agung Cahyo</div>
                                <div class="profile-email">PtAgung@gmail</div>
                                <a href="profile.php" class="edit-profile">Edit Profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <a href="ganti_sandi.php" class="menu-item">
                            <i class="fa-solid fa-lock"></i>
                            Ganti Kata Sandi
                        </a>
                        <a href="#" class="menu-item">
                            <i class="fa-regular fa-comment"></i>
                            Pesan
                        </a>
                        <a href="jadwal.php" class="menu-item">
                            <i class="fa-regular fa-calendar"></i>
                            Jadwal
                        </a>
                        <a href="saldoku.php"class="menu-item">
                            <i class="fa-solid fa-money-bill-wave"></i>
                            SaldoKu
                        </a>
                        <a href="riwayat.php" class="menu-item">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                            Riwayat
                        </a>
                        <a href="#" class="menu-item">
                            <i class="fa-regular fa-circle-question"></i>
                            Bantuan
                        </a>
                        <a href="login.php" class="menu-item">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Keluar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Existing page content remains the same -->

        <!-- User Greeting -->
    <div class="user-greeting">
        <img src="https://via.placeholder.com/60" alt="Foto Profil">
        <div class="text">
            <h2>Selamat Datang, PT Agung Cahyo!</h2>
            <p>Semoga harimu menyenangkan.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
             <!-- Card Saldo Info -->
            <div class="card saldo-info">
                <h3>
                    Saldo Virtualmu!
                    <a class="link" href="#">Lihat Log Penarikan</a>
                </h3>
                <div class="balance-container">
                    <div class="balance">
                        Rp. 150.000
                    </div>
                    <a class="link" href="#">Tarik</a>
                </div>
            </div>

            <h2 class="section-title">Jadwal Orderan</h2>
            <div class="order-box">
                <h3>Pesanan Mendatang</h3>
                <div class="order-item-box">
                    <span class="order-date">
                        27 November 2024
                        <i class="fa-regular fa-calendar"></i>
                    </span>
                    <div class="order-details">
                        <div class="order-name">Rini Ariyani</div>
                        <div class="order-location">
                            <i class="fa-solid fa-location-dot"></i>
                            Cibinong
                        </div>
                    </div>
                    <a href="#" class="selengkapnya">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Tabel Pesanan -->
        <div class="table-container">
            <h3>Pesanan Terakhir</h3>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Lokasi</th>
                        <th>Layanan</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>27 November 2024</td>
                        <td>Rini Ariyani</td>
                        <td>Cibinong</td>
                        <td>Perbaikan AC</td>
                        <td>Rp. 200.000</td>
                        <td><span class="status proses">Proses</span></td>
                    </tr>
                    <tr>
                        <td>23 November 2024</td>
                        <td>Anindya</td>
                        <td>GDC</td>
                        <td>Tambah Freon</td>
                        <td>Rp. 150.000</td>
                        <td><span class="status selesai">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>20 November 2024</td>
                        <td>Nopal</td>
                        <td>Cibinong</td>
                        <td>Instalasi AC</td>
                        <td>Rp. 350.000</td>
                        <td><span class="status selesai">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

    <script>
        // JavaScript for profile and notification dropdowns (same as beranda page)
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');
        const closeButtons = document.querySelectorAll('.close-button');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('show');
        });

        const notificationButton = document.getElementById('notificationButton');
        const notificationDropdown = document.getElementById('notificationDropdown');

        notificationButton.addEventListener('click', () => {
            notificationDropdown.classList.toggle('show');
        });

        closeButtons.forEach(button => {
            button.addEventListener('click', () => {
                profileDropdown.classList.remove('show');
                notificationDropdown.classList.remove('show');
            });
        });

        // Close dropdowns when clicking outside
        window.addEventListener('click', (e) => {
            if (!profileButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                profileDropdown.classList.remove('show');
            }
            if (!notificationButton.contains(e.target) && !notificationDropdown.contains(e.target)) {
                notificationDropdown.classList.remove('show');
            }
        });
    </script>
</body>
</html>