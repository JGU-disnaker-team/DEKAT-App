<?php
session_start();

// Fungsi untuk menangani upload foto
function handlePhotoUpload($file) {
    $target_dir = "uploads/profile_photos/";
    $file_extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $new_filename = uniqid() . '.' . $file_extension;
    $target_file = $target_dir . $new_filename;

    // Cek apakah file adalah gambar
    $valid_types = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($file_extension, $valid_types)) {
        return ["success" => false, "message" => "Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan."];
    }

    // Cek ukuran file (maksimal 5MB)
    if ($file["size"] > 5000000) {
        return ["success" => false, "message" => "File terlalu besar. Maksimal 5MB."];
    }

    // Coba upload file
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return ["success" => true, "filename" => $new_filename];
    }
    return ["success" => false, "message" => "Gagal mengupload file."];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["profile_photo"]) && $_FILES["profile_photo"]["error"] == 0) {
        $result = handlePhotoUpload($_FILES["profile_photo"]);
        if ($result["success"]) {
            $_SESSION["message"] = "Foto profil berhasil diperbarui!";
            // Simpan nama file foto ke database
            // ... kode untuk update database ...
        } else {
            $_SESSION["error"] = $result["message"];
        }
    }
    // Handle update data profil lainnya
    // ... kode untuk update data profil ...
    
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

// Ambil data profil dari database (contoh)
$profile_photo = "/api/placeholder/120/120"; // Ganti dengan path foto aktual dari database
?>
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

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }

        .main-content {
            margin-top: 60px;
            min-height: calc(100vh - 60px);
            padding: 2rem;
        }

        .header-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .back-button {
            text-decoration: none;
            color: #00137F;
            font-size: 1.5rem;
            transition: transform 0.2s ease;
        }

        .back-button:hover {
            transform: translateX(-5px);
        }

        h1 {
            font-size: 1.75rem;
            color: #002B96;
            font-weight: 700;
        }

        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 39, 255, 0.08);
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .profile-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at top right, rgba(0, 71, 255, 0.1) 0%, transparent 50%);
            z-index: 1;
            pointer-events: none;
        }

        .profile-photo-section {
            display: flex;
            gap: 2rem;
            margin-bottom: 2.5rem;
            align-items: center;
            position: relative;
        }

        .profile-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #002B96;
            box-shadow: 0 8px 20px rgba(0, 43, 150, 0.2);
            transition: all 0.3s ease;
        }

        .profile-photo:hover {
            transform: scale(1.05) rotate(3deg);
            box-shadow: 0 12px 25px rgba(0, 43, 150, 0.3);
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .change-photo {
            color: #002B96;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .change-photo:hover {
            color: #0047FF;
            transform: translateX(5px);
        }

        .change-photo i {
            transition: transform 0.3s ease;
        }

        .change-photo:hover i {
            transform: rotate(15deg);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.75rem;
            color: #002B96;
            font-weight: 600;
            font-size: 1rem;
        }

        input {
            width: 100%;
            padding: 0.875rem;
            border: 1px solid #E0E4F2;
            border-radius: 8px;
            background-color: #F9FAFF;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #0047FF;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 71, 255, 0.1);
        }

        .location-group {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .location-field {
            flex: 1;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        .btn {
            padding: 0.875rem 2.25rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            min-width: 140px;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-secondary {
            background-color: #F1F4FF;
            color: #002B96;
            border: 1px solid #E0E4F2;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #002B96;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 43, 150, 0.3);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 43, 150, 0.2);
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .profile-container {
                padding: 1.5rem;
            }

            .profile-photo-section {
                flex-direction: column;
                text-align: center;
            }

            .location-group {
                flex-direction: column;
                gap: 1.5rem;
            }

            .buttons {
                flex-direction: column;
                gap: 1rem;
            }

            .btn {
                width: 100%;
            }
        }
        <?php include 'styles.css'; ?>
        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-weight: 500;
        }
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }
        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
    </style>
</head>
<body>
    <nav>
        <a href="beranda.php" class="brand">Dekat</a>
        <div class="nav-links">
            <a href="beranda.php">Dashboard</a>
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

    <div class="main-content">
        <div class="header-section">
            <a href="beranda.php" class="back-button">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1>Edit Profil</h1>
        </div>

        <?php if (isset($_SESSION["message"])): ?>
            <div class="alert alert-success">
                <?php 
                echo $_SESSION["message"]; 
                unset($_SESSION["message"]);
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION["error"])): ?>
            <div class="alert alert-danger">
                <?php 
                echo $_SESSION["error"]; 
                unset($_SESSION["error"]);
                ?>
            </div>
        <?php endif; ?>

        <div class="profile-container">
            <form id="profileForm" method="POST" enctype="multipart/form-data">
                <div class="profile-photo-section">
                    <div class="profile-photo">
                        <img id="profileImage" src="<?php echo htmlspecialchars($profile_photo); ?>" alt="Profile photo">
                    </div>
                    <label for="profilePhotoInput" class="change-photo">
                        <i class="fas fa-camera"></i>
                        Ganti Foto
                    </label>
                    <input type="file" name="profile_photo" id="profilePhotoInput" accept="image/*" style="display: none;">
                </div>

                <!-- Form fields tetap sama -->
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="PT Agung Cahyo">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="PTAgung@gmail.co.id">
                </div>

                <div class="form-group">
                    <label>Nomor Ponsel</label>
                    <input type="tel" name="phone" value="08xxxxxxxxxx">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="Sukatani, Tapos, Kota Depok, Jawa Barat, 16461">
                </div>

                <div class="location-group">
                    <div class="location-field">
                        <label>Kota</label>
                        <input type="text" name="kota" value="Depok">
                    </div>
                    <div class="location-field">
                        <label>Provinsi</label>
                        <input type="text" name="provinsi" value="Jawa Barat">
                    </div>
                </div>

                <div class="buttons">
                    <a href="beranda.php" class="btn btn-secondary">
                        <i class="fas fa-times"></i>
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>
                </div>
            </form>
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

        // Tambahan JavaScript untuk preview dan konfirmasi foto
        const profilePhotoInput = document.getElementById('profilePhotoInput');
        const profileImage = document.getElementById('profileImage');
        const profileForm = document.getElementById('profileForm');

        // Preview foto yang dipilih
        profilePhotoInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    profileImage.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Konfirmasi sebelum submit form
        profileForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            if (profilePhotoInput.files.length > 0) {
                const confirmChange = confirm("Apakah Anda yakin ingin menyimpan perubahan foto profil?");
                if (!confirmChange) {
                    return;
                }
            }
            
            profileForm.submit();
        });
    </script>
</body>
</html>