<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengirim Pesan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .chat-container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .user-list {
            width: 30%;
            border-right: 1px solid #ccc;
            padding: 10px;
            background-color: #fff;
        }

        .user-list h2 {
            margin: 0 0 10px;
            font-size: 20px;
            color: #073BBE;
        }

        .user-list .user {
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .user-list .user:hover {
            background-color: #e0e0e0;
        }

        .chat-box {
            width: 70%;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
        }

        .chat-header h3 {
            margin: 0;
            color: #073BBE;
        }

        .chat-messages {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
            background-color: #f9f9f9;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .chat-message {
            margin: 5px 0;
            padding: 8px;
            border-radius: 5px;
            max-width: 70%;
        }

        .chat-message.user {
            background-color: #d1e7dd;
            align-self: flex-end;
        }

        .chat-message.other {
            background-color: #f8d7da;
            align-self: flex-start;
        }

        .input-container {
            display: flex;
            align-items: center;
        }

        .input-container input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .input-container button {
            padding: 10px 15px;
            background-color: #073BBE;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .input-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav>
        <div class="grup-kiri">
            <div class="nav_logo"><a href="#">Dekat.</a></div>
            <ul class="nav_links">
                <li class="link"><a href="#">Beranda</a></li>
                <li class="dropdown">
                    <div class="dropbtn">Layanan <i class="fas fa-chevron-down"></i></div>
                    <div class="dropdown-content" id="myDropdown">
                        <h4>Layanan</h4>
                        <div class="dropdown-grid">
                            <a href="#">
                                <div class="dropdown-item">
                                    <img src="assets/ace.jpg" alt="Landing Page Image">
                                    <h5>Service AC</h5>
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
                        </div>
                    </div>
                </li>
                <li class="link"><a href="#">Tentang Kami</a></li>
            </ul>
        </div>
        <div class="grup-kanan">
            <ul class="nav_links">
                <li class="link"><a href="#"><i class="fa fa-search"></i></a></li>
                <li class="link"><a href=""><i class="fas fa-comment-alt"></i></a></li>
                <li class="link"><a href="#"><i class="fas fa-bell"></i></a></li>
                <div class="link">
                    <div class="profile-icon" onclick="toggleDropdown()">
                        <div class="circle"></div>
                    </div>
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
            </ul>
        </div>
    </nav>

    <div class="chat-container">
        <div class="user-list">
            <h2>Pesan</h2>
            <div class="user">Ahmad Teknik</div>
            <div class="user">Depok Top AC</div>
            <!-- Tambahkan pengguna lain di sini -->
        </div>
        <div class="chat-box">
            <div class="chat-header">
                <h3>Ahmad Teknik</h3>
                <span>Aktif</span>
            </div>
            <div class="chat-messages" id="chatMessages">
                <div class="chat-message other">Halo, Apakah Benar Memesan Service AC?</div>
                <div class="chat-message user">Ya, Benar Pak.</div>
                <div class="chat-message other">Saya menuju lokasi!</div>
            </div>
            <div class="input-container">
                <input type="text" id="messageInput" placeholder="Ketik Disini...">
                <button onclick="sendMessage()">Kirim</button>
            </div>
        </div>
    </div>

    <script>
        function sendMessage() {
            const input = document.getElementById('messageInput');
            const messageText = input.value.trim();
            if (messageText) {
                const chatMessages = document.getElementById('chatMessages');
                
                // Buat elemen pesan baru untuk pengirim
                const newMessage = document.createElement('div');
                newMessage.classList.add('chat-message', 'user');
                newMessage.textContent = messageText;

                // Tambahkan pesan ke chat
                chatMessages.appendChild(newMessage);
                
                // Kosongkan input
                input.value = '';
                
                // Scroll ke bawah
                chatMessages.scrollTop = chatMessages.scrollHeight;

                // Simulasi pesan dari penerima
                setTimeout(() => {
                    const replyMessage = document.createElement('div');
                    replyMessage.classList.add('chat-message', 'other');
                    replyMessage.textContent = "Pesan diterima: " + messageText;
                    chatMessages.appendChild(replyMessage);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000); // Simulasi delay 1 detik untuk balasan
            }
        }
    </script>
</body>
</html> 