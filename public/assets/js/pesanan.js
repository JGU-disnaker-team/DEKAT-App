function updateACOptions() {
  const jumlahAC = document.getElementById("jumlah-ac").value;
  const container = document.getElementById("ac-container");

  // Kosongkan container sebelum menambah dropdown baru
  container.innerHTML = "";

  // Tambahkan dropdown sesuai dengan jumlah AC
  for (let i = 0; i < jumlahAC; i++) {
    const acDiv = document.createElement("div");
    acDiv.classList.add("ac-item");

    // Menambahkan judul untuk setiap AC
    const acTitle = document.createElement("h3");
    acTitle.textContent = "AC " + (i + 1);
    acDiv.appendChild(acTitle);

    // Dropdown Tipe AC
    const selectTipeAC = document.createElement("select");
    selectTipeAC.setAttribute("id", "tipe-ac-" + (i + 1));
    const optionTipe1 = document.createElement("option");
    optionTipe1.value = "";
    optionTipe1.text = "Pilih Tipe AC";
    selectTipeAC.appendChild(optionTipe1);
    const optionTipe2 = document.createElement("option");
    optionTipe2.value = "split";
    optionTipe2.text = "AC Split";
    selectTipeAC.appendChild(optionTipe2);
    const optionTipe3 = document.createElement("option");
    optionTipe3.value = "window";
    optionTipe3.text = "AC Window";
    selectTipeAC.appendChild(optionTipe3);
    acDiv.appendChild(selectTipeAC);

    // Dropdown Kapasitas AC
    const selectKapasitasAC = document.createElement("select");
    selectKapasitasAC.setAttribute("id", "kapasitas-ac-" + (i + 1));
    const optionKapasitas1 = document.createElement("option");
    optionKapasitas1.value = "";
    optionKapasitas1.text = "Pilih Kapasitas AC";
    selectKapasitasAC.appendChild(optionKapasitas1);
    const optionKapasitas2 = document.createElement("option");
    optionKapasitas2.value = "0.5";
    optionKapasitas2.text = "0.5 PK";
    selectKapasitasAC.appendChild(optionKapasitas2);
    const optionKapasitas3 = document.createElement("option");
    optionKapasitas3.value = "1";
    optionKapasitas3.text = "1 PK";
    selectKapasitasAC.appendChild(optionKapasitas3);
    const optionKapasitas4 = document.createElement("option");
    optionKapasitas4.value = "1.5";
    optionKapasitas4.text = "1.5 PK";
    selectKapasitasAC.appendChild(optionKapasitas4);
    const optionKapasitas5 = document.createElement("option");
    optionKapasitas5.value = "2";
    optionKapasitas5.text = "2 PK";
    selectKapasitasAC.appendChild(optionKapasitas5);
    acDiv.appendChild(selectKapasitasAC);

    container.appendChild(acDiv);
  }
}

// Event listener untuk menangani perubahan jumlah AC
document.getElementById("jumlah-ac").addEventListener("input", updateACOptions);

// Panggil fungsi pertama kali untuk menampilkan dropdown tipe AC dan kapasitas sesuai jumlah awal (1)
updateACOptions();

//Tanggal
document.addEventListener("DOMContentLoaded", function () {
  const today = new Date(); // Mengambil tanggal hari ini
  const maxDate = new Date(); // Menyimpan tanggal dua bulan ke depan

  // Menambah 2 bulan pada tanggal hari ini
  maxDate.setMonth(today.getMonth() + 2);

  // Mengubah tanggal ke format YYYY-MM-DD
  const todayFormatted = today.toISOString().split("T")[0];
  const maxDateFormatted = maxDate.toISOString().split("T")[0];

  // Mengatur atribut min dan max pada input date
  const inputTanggal = document.getElementById("tanggal");
  inputTanggal.min = todayFormatted;
  inputTanggal.max = maxDateFormatted;
});

//waktu
document.addEventListener("DOMContentLoaded", function () {
  const jamOptions = [8, 9, 10, 11, 13, 14, 15, 16]; // Jam yang tersedia
  const menitOptions = ["00", "15", "30", "45"]; // Menit yang tersedia

  const jamSelect = document.getElementById("jam");
  const menitSelect = document.getElementById("menit");

  // Mengisi dropdown jam
  jamOptions.forEach(function (jam) {
    const option = document.createElement("option");
    option.value = jam < 10 ? "0" + jam : jam; // Menambahkan leading zero jika jam < 10
    option.textContent = option.value; // Menampilkan jam dengan leading zero jika perlu
    jamSelect.appendChild(option);
  });

  // Mengisi dropdown menit
  menitOptions.forEach(function (menit) {
    const option = document.createElement("option");
    option.value = menit;
    option.textContent = menit; // Menampilkan menit
    menitSelect.appendChild(option);
  });
});
