<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saldoku - Dekat</title>
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

        .main-content {
            flex: 1;
            padding: 2rem;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .tab-menu {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tab-button {
            padding: 8px 16px;
            border: none;
            font-size: 16px;
            background: none;
            color: #333;
            cursor: pointer;
            font-weight: bold;
        }

        .tab-button.active {
            color: white;
            background-color: #0047FF;
            border-radius: 5px;
        }

        .status-pill {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #FFE4C4;
            color: #8B4513;
        }

        .warning-pill {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #FFE9E9;
            color: #FF0000;
            display: flex;
            align-items: center;
            gap: 5px;
            width: fit-content;
        }

        .order-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .order-header {
            background-color: #00208F;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .timer {
            color: #FF0000;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .timer::before {
            content: "⏱";
        }

        .order-content {
            padding: 20px;
        }

        .order-title {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .order-details {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            gap: 10px;
            align-items: center;
            color: #666;
        }

        .warranty-info {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px;
            row-gap: 15px;
            padding: 0 10px;
        }

        .warranty-label {
            color: #666;
            font-size: 14px;
        }

        .warranty-value {
            text-align: right;
            font-size: 14px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        #status-tab, #garansi-tab {
            width: 100%;
            position: relative;
        }

    @media (max-width: 768px) {
        .nav-links{
            display: none;
        }
        .container {
            padding: 0 10px;
        }

        .warranty-info {
            grid-template-columns: 1fr;
        }

        .warranty-value {
            text-align: left;
        }
    }


    </style>
</head>
<body>
    <nav>
        <a href="beranda.php" class="brand">Dekat</a>
        <div class="nav-links">
            <a href="beranda.php">Dashboard</a>
            <a href="jadwal.php">Jadwal</a>
            <a href="saldoku.php" class="active">Saldoku</a>
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

    <!-- Main Content -->
    <div class="container">
    <div class="tab-menu">
        <button class="tab-button active" onclick="showTab('status')">Status Transaksi</button>
        <button class="tab-button" onclick="showTab('garansi')">Garansi</button>
    </div>

    <!-- Status Tab Content -->
    <div id="status-tab" class="tab-content active">
        <div class="order-card">
            <div class="order-header">
                <span>10 Januari 2025 16:24 WIB</span>
                <span class="status-tag">Dapat dicairkan</span>
            </div>
            <div class="order-content">
                <div class="status-pill completed">Selesai</div>
                <div class="order-title">
                    <h3>Orderan Siti Ariani · Perawatan dan Service</h3>
                    <span>Rp 150.000</span>
                </div>
                <div class="order-details">
                    <div class="detail-item">
                        <span>📍</span>
                        <span>Jl. Margonda Raya No 22, Pancoran Mas</span>
                    </div>
                    <div class="detail-item">
                        <span>🕒</span>
                        <span>13 : 00 WIB</span>
                    </div>
                    <div class="detail-item">
                        <span>🔧</span>
                        <span>AC nya kotor, Remote Rusak</span>
                    </div>
                </div>
                <div class="warranty-info">
                    <div class="warranty-label">Jenis AC :</div>
                    <div class="warranty-value">Standing AC, 2 PK</div>

                    <div class="warranty-label">Jumlah :</div>
                    <div class="warranty-value">1</div>

                    <div class="warranty-label">Metode Pembayaran :</div>
                    <div class="warranty-value">BCA Virtual Account</div>
                </div>
            </div>
        </div>

        <!-- Order kedua dalam status -->
        <div class="order-card">
            <div class="order-header">
                <span>10 Januari 2025 16:24 WIB</span>
                <span>Diproses</span>
            </div>
            <div class="order-content">
                <div class="status-pill in-progress">Dalam Proses</div>
                <div class="order-title">
                    <h3>Orderan Siti Ariani · Perawatan dan Service</h3>
                    <span>Rp 150.000</span>
                </div>
                <div class="order-details">
                    <div class="detail-item">
                        <span>📍</span>
                        <span>Jl. Margonda Raya No 22, Pancoran Mas</span>
                    </div>
                    <div class="detail-item">
                        <span>🕒</span>
                        <span>13 : 00 WIB</span>
                    </div>
                    <div class="detail-item">
                        <span>🔧</span>
                        <span>AC nya kotor, Remote Rusak</span>
                    </div>
                </div>
                <div class="warranty-info">
                    <div class="warranty-label">Jenis AC :</div>
                    <div class="warranty-value">Standing AC, 2 PK</div>

                    <div class="warranty-label">Jumlah :</div>
                    <div class="warranty-value">1</div>

                    <div class="warranty-label">Metode Pembayaran :</div>
                    <div class="warranty-value">BCA Virtual Account</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Garansi Tab Content -->
    <div id="garansi-tab" class="tab-content">
        <!-- First warranty card -->
        <div class="order-card">
            <div class="order-header">
                <span>10 Januari 2025 16:24 WIB</span>
                <span class="timer">03:00:00:00</span>
            </div>
            <div class="order-content">
                <div class="status-pill">Dalam Proses Garansi</div>
                <div class="order-title">
                    <h3>Orderan Siti Ariani · Perawatan dan Service</h3>
                </div>
                <div class="order-details">
                    <div class="detail-item">
                        <span>📍</span>
                        <span>Jl. Margonda Raya No 22, Pancoran Mas</span>
                    </div>
                    <div class="detail-item">
                        <span>🕒</span>
                        <span>13 : 00 WIB</span>
                    </div>
                    <div class="detail-item">
                        <span>🔧</span>
                        <span>AC nya Kotor, Remote Rusak</span>
                    </div>
                </div>
                <div class="warranty-info">
                    <div class="warranty-label">Jenis AC :</div>
                    <div class="warranty-value">Standing AC, 2 PK</div>

                    <div class="warranty-label">Jumlah :</div>
                    <div class="warranty-value">1</div>

                    <div class="warranty-label">Metode Pembayaran :</div>
                    <div class="warranty-value">BCA Virtual Account</div>

                    <div class="warranty-label">Id Orderan :</div>
                    <div class="warranty-value">D324565</div>

                    <div class="warranty-label">Jenis Layanan :</div>
                    <div class="warranty-value">Service</div>

                    <div class="warranty-label">Tanggal Pelayanan :</div>
                    <div class="warranty-value">10 Januari 2025</div>

                    <div class="warranty-label">Masa Garansi :</div>
                    <div class="warranty-value">13 Januari 2025</div>

                    <div class="warranty-label">Keluhan :</div>
                    <div class="warranty-value">Remote Rusak</div>

                    <div class="warranty-label">Riwayat Layanan Sebelumnya :</div>
                    <div class="warranty-value">Tambah Freon</div>

                    <div class="warranty-label">Nama Teknisi :</div>
                    <div class="warranty-value">Raden</div>
                </div>
            </div>
        </div>

        <!-- Second warranty card -->
        <div class="order-card">
            <div class="order-header">
                <span>10 Januari 2025 16:24 WIB</span>
                <span class="timer">02:03:23:00</span>
            </div>
            <div class="order-content">
                <div class="warning-pill">⚠️ Ada Keluhan</div>
                <div class="order-title">
                    <h3>Orderan Siti Ariani · Perawatan dan Service</h3>
                </div>
                <div class="order-details">
                    <div class="detail-item">
                        <span>📍</span>
                        <span>Jl. Margonda Raya No 22, Pancoran Mas</span>
                    </div>
                    <div class="detail-item">
                        <span>🕒</span>
                        <span>13 : 00 WIB</span>
                    </div>
                    <div class="detail-item">
                        <span>🔧</span>
                        <span>AC nya Kotor, Remote Rusak</span>
                    </div>
                </div>
                <div class="warranty-info">
                    <div class="warranty-label">Jenis AC :</div>
                    <div class="warranty-value">Standing AC, 2 PK</div>

                    <div class="warranty-label">Jumlah :</div>
                    <div class="warranty-value">1</div>
                </div>
            </div>
        </div>
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

        function showTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active');
            });

            // Show selected tab
            document.getElementById(tabName + '-tab').classList.add('active');
            document.querySelector(`button[onclick="showTab('${tabName}')"]`).classList.add('active');
        }
    </script>
</body>
</html>
