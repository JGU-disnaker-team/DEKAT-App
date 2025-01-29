<?php
// Add your database connection here if needed
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Freon</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-900">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">Form Input Freon</h1>
            <form id="freonForm">
                <!-- Personal Info -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block mb-2">Nama</label>
                        <input type="text" class="border rounded p-2 w-full" name="nama" required>
                    </div>
                    <div>
                        <label class="block mb-2">Alamat</label>
                        <input type="text" class="border rounded p-2 w-full" name="alamat" required>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block mb-2">Tanggal</label>
                        <input type="date" class="border rounded p-2 w-full" name="tanggal" required>
                    </div>
                    <div>
                        <label class="block mb-2">Waktu</label>
                        <input type="time" class="border rounded p-2 w-full" name="waktu" required>
                    </div>
                </div>

                <!-- AC Details -->
                <div class="mb-4">
                    <label class="block mb-2">Jenis AC</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="flex items-center">
                            <input type="checkbox" name="ac_type" value="standing" class="mr-2">
                            Standing
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="ac_type" value="central" class="mr-2">
                            Central
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="ac_type" value="casette" class="mr-2">
                            Casette
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="ac_type" value="portable" class="mr-2">
                            Portable
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="ac_type" value="inverter" class="mr-2">
                            Inverter
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="ac_type" value="conventional" class="mr-2">
                            Konvensional/Ac Biasa
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block mb-2">Merk AC</label>
                            <input type="text" class="border rounded p-2 w-full" name="merk_ac">
                        </div>
                        <div>
                            <label class="block mb-2">Kapasitas</label>
                            <input type="text" class="border rounded p-2 w-full" name="kapasitas">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block mb-2">Jenis Freon</label>
                            <input type="text" class="border rounded p-2 w-full" name="jenis_freon">
                        </div>
                        <div>
                            <label class="block mb-2">Tekanan Freon Awal</label>
                            <input type="text" class="border rounded p-2 w-full" name="tekanan_freon">
                        </div>
                    </div>

                    <!-- System Status -->
                    <div class="mb-4">
                        <label class="block mb-2">Indikasi Kebocoran</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="kebocoran" value="terdeteksi" checked class="mr-2">
                                Terdeteksi
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kebocoran" value="tidak_terdeteksi" class="mr-2">
                                Tidak Terdeteksi
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Pengisian Freon</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="pengisian" value="tambah" checked class="mr-2">
                                Tambah Freon
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="pengisian" value="isi_ulang" class="mr-2">
                                Isi Ulang Penuh
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Kondisi Sistem Pendingin</label>
                        <div class="flex items-center space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="sistem_pendingin" value="normal" class="mr-2">
                                Normal
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="sistem_pendingin" value="perlu_perbaikan" checked class="mr-2">
                                Perlu Perbaikan
                            </label>
                            <button type="button" class="bg-red-500 text-white px-3 py-1 rounded text-sm">
                                Pipa Bocor
                            </button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2">Kondisi Kompresor</label>
                        <div class="flex items-center space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="kompresor" value="normal" class="mr-2">
                                Normal
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kompresor" value="perlu_perhatian" checked class="mr-2">
                                Perlu Perhatian
                            </label>
                            <button type="button" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                Suara Tidak Normal
                            </button>
                        </div>
                    </div>

                <!-- Agreement Checkboxes -->
                <div class="mb-6 space-y-2">
                    <label class="flex items-start">
                        <input type="checkbox" class="mr-2 mt-1" required name="agreement1">
                        <span class="text-sm">
                            Saya akan menginformasikan kepada pelanggan jika selama masa garansi diperlukan layanan tambahan di luar perbaikan awal, seperti penggantian sparepart.
                        </span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2" required name="agreement2">
                        <span class="text-sm">Saya menyetujui semua kebijakan sesuai dengan S&K Berlaku</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded w-full">Selesai</button>
            </form>

            <!-- Confirmation Messages -->
            <div id="confirmationMessage" class="hidden text-center py-4">
                <p class="text-green-600 font-bold">Formulir terkirim! Mohon tunggu konfirmasi konsumen</p>
            </div>

            <div id="finalConfirmation" class="hidden">
                <div class="flex justify-between items-center py-4">
                    <p class="text-green-600 font-bold">Formulir dikonfirmasi</p>
                    <button class="bg-blue-600 text-white px-6 py-2 rounded" onclick="window.location.href='order-details.php';">Selesai</button>
                </div>
            </div>