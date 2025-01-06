<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Admin Dashboard </title>
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard-admin.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">DEKAT</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class="fa-solid fa-layer-group"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-user"></i>
          <span class="links_name">Data Konsumen</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-user-group"></i>
          <span class="links_name">Data Mitra</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-receipt"></i>
          <span class="links_name">Data Pemesanan</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-wallet"></i>
          <span class="links_name">Pembayaran</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-desktop"></i>
          <span class="links_name">Monitoring</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-file-invoice"></i>
          <span class="links_name">Laporan</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-code"></i>
          <span class="links_name">Frontend</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-building-user"></i>
          <span class="links_name">Data Master</span>
        </a>
      </li>
      <!-- <li class="log_out">
        <a href="#">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span class="links_name">Log out</span>

        </a>

      </li> -->
      <li class="log_out">
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="fa-solid fa-bars"></i>
        <span class="dashboard">Home - Dashboard</span>
      </div>

      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Junaedi</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Data Konsumen</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-user"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Data Mitra</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-user-group"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Data Pemesanan</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-receipt"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Pembayaran</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-wallet"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Monitoring</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-desktop"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Laporan</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-file-invoice"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Frontend</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-code"></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Data Master</div>
            <div class="indicator">
              <i class="fa-solid fa-angle-left"></i>
              <span class="text">Lihat</span>
            </div>
          </div>
          <i class="fa-solid fa-building-user"></i>
        </div>


      </div>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebar-button i"); // Ambil ikon di dalam tombol sidebar

    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active"); // Toggle kelas active di sidebar
      if (sidebar.classList.contains("active")) {
        // Jika sidebar aktif, ganti ikon dengan 'fa-bars-staggered'
        sidebarBtn.classList.replace("fa-bars", "fa-bars-staggered");
      } else {
        // Jika sidebar tidak aktif, ganti ikon kembali ke 'fa-bars'
        sidebarBtn.classList.replace("fa-bars-staggered", "fa-bars");
      }
    };
  </script>
</body>

</html>