<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
    <script src="https://kit.fontawesome.com/58c31d4a0e.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fe;
        }

        /* New Nav Styles */
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

        /* Profile Dropdown Styles */
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
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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

        .see-all {
            display: block;
            padding: 1rem;
            text-align: center;
            color: #0047FF;
            font-size: 0.9rem;
            text-decoration: none;
            border-top: 1px solid #E5E7EB;
        }

        /* Original Container Styles */
        .container {
            padding: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .report-card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .report-card h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .report-card p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        .report-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 5px 0;
        padding: 5px 0;
        }

        .report-info-label {
            font-weight: bold;
            flex: 1;
            max-width: 150px; /* Anda bisa menyesuaikan lebar ini */
        }

        .report-info-value {
            flex: 2;
        }

        .print-link {
            text-align: right;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #eee;
        }

        .print-link a {
            color: #003580;
            text-decoration: none;
            font-weight: bold;
        }

        .print-link a:hover {
            text-decoration: underline;
        }

        .date-picker {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .date-picker input {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 25px;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .container {
                padding: 0 10px;
            }
            
            .report-card {
                padding: 10px;
            }

            .report-info {
            flex-direction: column;
            align-items: flex-start;
            }

            .report-info-label {
                margin-bottom: 5px;
            }

            .report-info-value {
                width: 100%;
            }
            
            .title {
                font-size: 20px;
            }
            
            .date-picker {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
            
            .date-picker input {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- New Navigation -->
    <nav>
        <a href="beranda.php" class="brand">Dekat</a>
        <div class="nav-links">
            <a href="beranda.php">Dashboard</a>
            <a href="jadwal.php">Jadwal</a>
            <a href="saldoku.php">Saldoku</a>
            <a href="riwayat.php" class="active">Riwayat</a>
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

    <!-- Main Content -->
    <div class="container">
        <div class="date-picker">
            <label for="date">Tanggal:</label>
            <input type="date" id="date" value="2025-01-10">
        </div>

        <div class="title">Riwayat Laporan</div>

        <div class="report-card">
            <h3>Laporan Pekerjaan Teknisi AC</h3>
            
            <div class="report-info">
                <span class="report-info-label">Tanggal</span>
                <span class="report-info-value">10 Januari 2025</span>
            </div>
            
            <div class="report-info">
                <span class="report-info-label">Nama Teknisi</span>
                <span class="report-info-value">Randi</span>
            </div>
            
            <div class="report-info">
                <span class="report-info-label">Lokasi</span>
                <span class="report-info-value">Jl. Margonda Raya</span>
            </div>
            
            <div class="report-info">
                <span class="report-info-label">Jenis Layanan</span>
                <span class="report-info-value">Perawatan dan Perbaikan</span>
            </div>
            
            <div class="report-info">
                <span class="report-info-label">Detail Pekerjaan</span>
                <span class="report-info-value">-</span>
            </div>
            
            <div class="print-link">
                <a href="print.php">Print</a>
            </div>
        </div>
    </div>

    <script>
        // Profile and Notification Dropdowns
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');
        const notificationButton = document.getElementById('notificationButton');
        const notificationDropdown = document.getElementById('notificationDropdown');
        const closeButtons = document.querySelectorAll('.close-button');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('show');
        });

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

        // Original date picker functionality
        const dateInput = document.getElementById('date');
        dateInput.addEventListener('change', function() {
            alert(`You selected: ${this.value}`);
        });
    </script>
</body>
</html>