<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dekat - Jadwal</title>
    <script src="https://kit.fontawesome.com/58c31d4a0e.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #F8F9FE;
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
            width: 50px;
            height: 50px;
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

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }

        /* Styles untuk content */
        .content {
            padding: 20px;
            background-color: #E8EAF6;
        }

        .back-button {
            font-size: 25px;
            color: #0D47A1;
            text-decoration: none;
            margin: 20px;
            display: inline-block;
        }

        .page-header {
            background-color: #f8f8f8;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .page-title {
            font-size: 28px;
            color: #0D47A1;
            font-weight: bold;
        }

        .search-container {
            display: flex;
            align-items: center;
            background: white;
            padding: 10px 20px;
            border-radius: 25px;
            gap: 10px;
        }

        .search-container input {
            border: none;
            outline: none;
            font-size: 16px;
            width: 200px;
        }

        .search-container .calendar-icon {
            color: #666;
        }

        .section-title {
            color: #0D47A1;
            font-size: 20px;
            margin: 20px;
            font-weight: bold;
        }

        .appointments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .appointment-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            gap: 15px;
            position: relative;
        }

        .profile-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            aspect-ratio: 1/1;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }

        .appointment-details {
            flex: 1;
        }

        .customer-name {
            color: #0D47A1;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .customer-phone {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .customer-address {
            color: #333;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .appointment-time {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #666;
            font-size: 14px;
        }

        .view-order-btn {
            color: #0D47A1;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        @media (max-width: 768px) {
        .search-container {
            width: 100%;
            margin-top: 10px;
        }
        
        .search-container input {
            width: 100%;
        }
        
        .appointments-grid {
            grid-template-columns: 1fr;
        }
        
        .page-header {
            flex-direction: column;
            gap: 15px;
        }
        }
    </style>
</head>
<body>
    <nav>
        <a href="beranda.php" class="brand">Dekat</a>
        <div class="nav-links">
            <a href="beranda.php">Dashboard</a>
            <a href="jadwal.php" class="active">Jadwal</a>
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
                        <a href="#" class="menu-item">
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
    <div class="content">
    <a href="beranda.php" class="back-button">
    <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="page-header">
        <h1 class="page-title">Jadwalmu!</h1>
        <div class="search-container">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Cari Tanggal...">
            <i class="fas fa-calendar calendar-icon"></i>
        </div>
    </div>

    <h2 class="section-title">Hari Ini</h2>
    <div class="appointments-grid" id="todayAppointments">
        <div class="appointment-card">
            <div class="profile-image">
                <img src="/api/placeholder/60/60" alt="Profile" class="profile-pic">
            </div>
            <div class="appointment-details">
                <div class="customer-name">Siti Ariani</div>
                <div class="customer-phone">0813 xxxx xxxx</div>
                <div class="customer-address">Jl. Margonda Raya No 22, Pancoran Mas</div>
                <a href="#" class="view-order-btn">Lihat Orderan</a>
            </div>
            <div class="appointment-time">14.00 WIB</div>
        </div>

        <div class="appointment-card">
            <div class="profile-image">
                <img src="/api/placeholder/60/60" alt="Profile" class="profile-pic">
            </div>
            <div class="appointment-details">
                <div class="customer-name">Siti Ariani</div>
                <div class="customer-phone">0813 xxxx xxxx</div>
                <div class="customer-address">Jl. Margonda Raya No 22, Pancoran Mas</div>
                <a href="#" class="view-order-btn">Lihat Orderan</a>
            </div>
            <div class="appointment-time">14.00 WIB</div>
        </div>
        <!-- Repeat for other appointments -->
    </div>

    <h2 class="section-title">Besok</h2>
    <div class="appointments-grid" id="tomorrowAppointments">
        <div class="appointment-card">
            <div class="profile-image">
                <img src="/api/placeholder/60/60" alt="Profile" class="profile-pic">
            </div>
            <div class="appointment-details">
                <div class="customer-name">Siti Ariani</div>
                <div class="customer-phone">0813 xxxx xxxx</div>
                <div class="customer-address">Jl. Margonda Raya No 22, Pancoran Mas</div>
                <a href="#" class="view-order-btn">Lihat Orderan</a>
            </div>
            <div class="appointment-time">14.00 WIB</div>
        </div>
        <!-- Repeat for other appointments -->
    </div>
</div>

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