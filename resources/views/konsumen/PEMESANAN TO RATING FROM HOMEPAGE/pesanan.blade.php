<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan AC</title>
    <script src="pesanan.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        background-color: #f4f4f4;
      }

      .info {
        display: flex;
        align-items: center; /* Menyelaraskan teks dan ikon secara vertikal */
        margin-bottom: 10px; /* Jarak antar baris */
      }

      .info i {
        font-size: 16px; /* Ukuran ikon */
        margin-right: 10px; /* Jarak antara ikon dan teks */
        color: #555; /* Warna ikon */
      }

      .info span {
        font-size: 14px;
        color: #333;
      }

      .container {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .card {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: #f9f9f9;
      }

      #tipe-ac-container select {
        margin-top: 10px;
        padding: 5px;
        width: 100%;
        font-size: 14px;
      }

      h2 {
        margin: 0 0 10px;
        font-size: 18px;
        color: #333;
      }

      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
      }

      input,
      select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      button {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      button:hover {
        background: #0056b3;
      }

      .waktu-container {
        display: flex; /* Membuat elemen berada dalam satu baris */
        align-items: center; /* Menyelaraskan elemen secara vertikal */
      }

      .waktu-container select {
        width: 60px; /* Menentukan lebar dropdown jam dan menit */
        padding: 5px; /* Memberikan sedikit ruang di dalam dropdown */
        margin-right: 5px; /* Memberikan jarak antar elemen */
      }

      .waktu-container span {
        font-size: 1.5em; /* Ukuran font untuk simbol ":" */
        margin: 0 10px; /* Memberikan jarak di sekitar simbol ":" */
      }

      #alamat {
        width: 100%;
        min-width: 300px;
        height: 150px;
        box-sizing: border-box;
        padding: 10px; /* Memberikan jarak dalam */
        resize: none; /* Opsional: mencegah pengguna mengubah ukuran */
        overflow: auto; /* Menangani teks panjang dengan scroll jika diperlukan */
        text-align: left; /* Rata kiri */
        vertical-align: top; /* Dimulai dari atas */
        font-family: Arial, sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h2>Detail saya</h2>
        <div class="info">
          <i class="fa fa-user"></i>
          <!-- Ikon User -->
          <span id="name">Mursidah</span>
        </div>
        <div class="info">
          <i class="fa fa-envelope"></i>
          <!-- Ikon Email -->
          <span id="email">Mursidah@gmail.com</span>
        </div>
      </div>

      <div class="card">
        <h2>Atur Lokasi</h2>
        <div>
          <label for="kecamatan">Lokasi</label>
          <select id="kecamatan">
            <option value="">Pilih Lokasi</option>
          </select>
        </div>
        <div>
          <label for="alamat">Alamat</label>
          <textarea
            id="alamat"
            placeholder="Masukkan alamat lengkap"
          ></textarea>
        </div>
      </div>
      <div class="card">
        <h2>Jumlah AC</h2>
        <div>
          <input type="number" id="jumlah-ac" min="1" value="1" />
        </div>
      </div>

      <div class="card" id="ac-container">
        <!-- Dropdown tipe AC dan kapasitas akan ditambahkan di sini secara dinamis -->
      </div>

      <div class="card">
        <h2>Jadwal Pengiriman</h2>
        <div>
          <label for="tanggal">Tanggal</label>
          <input type="date" id="tanggal" placeholder="DD/MM/YYYY" />
        </div>
        <div>
          <label for="waktu">Waktu:</label>
          <div class="waktu-container">
            <select id="jam">
              <!-- Dropdown Jam akan diisi oleh JavaScript -->
            </select>
            <span>:</span>
            <!-- Simbol ":" antara jam dan menit -->
            <select id="menit">
              <!-- Dropdown Menit akan diisi oleh JavaScript -->
            </select>
          </div>
        </div>
      </div>
      <a href="confirmationpayment.blade.php">
        <button type="submit">Selanjutnya</button>
      </a>
    </div>
  </body>
</html>
