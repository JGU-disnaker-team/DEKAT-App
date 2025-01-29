<?php
// Add your database connection here if needed
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kerusakan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-900">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">Form Kerusakan</h1>
            <form id="damageForm">
                <!-- Pemasangan Section -->
                <div class="mb-6">
                    <h2 class="font-bold mb-3">Pemasangan</h2>
                    <div class="space-y-2">
                        <div>
                            <input type="checkbox" name="pasang" id="pasang" class="mr-2">
                            <label for="pasang">Pasang (adjust/PK)</label>
                        </div>
                        <div>
                            <input type="checkbox" name="bongkar" id="bongkar" class="mr-2">
                            <label for="bongkar">Bongkar</label>
                        </div>
                        <div>
                            <input type="checkbox" name="bobok_tembok" id="bobok_tembok" class="mr-2">
                            <label for="bobok_tembok">Bobok Tembok (adjust/titik)</label>
                        </div>
                        <div>
                            <input type="checkbox" name="pengelasan" id="pengelasan" class="mr-2">
                            <label for="pengelasan">Pengelasan (adjust/titik)</label>
                        </div>
                    </div>
                </div>

                <!-- Perawatan Section -->
                <div class="mb-6">
                    <h2 class="font-bold mb-3">Perawatan</h2>
                    <div class="space-y-2">
                        <div>
                            <input type="checkbox" name="isi_freon" id="isi_freon" class="mr-2">
                            <label for="isi_freon">Isi Freon (adjust/PK)</label>
                        </div>
                        <div>
                            <input type="checkbox" name="cuci" id="cuci" class="mr-2">
                            <label for="cuci">Cuci (adjust/PK)</label>
                        </div>
                        <div>
                            <input type="checkbox" name="cuci_inverter" id="cuci_inverter" class="mr-2">
                            <label for="cuci_inverter">Cuci Inverter</label>
                        </div>
                        <div>
                            <input type="checkbox" name="overhaul" id="overhaul" class="mr-2">
                            <label for="overhaul">Overhaul/Cuci Besar (adjust/PK)</label>
                        </div>
                    </div>
                </div>

                <!-- Perbaikan Section -->
                <div class="mb-6">
                    <h2 class="font-bold mb-3">Perbaikan</h2>
                    <div class="space-y-2">
                        <div>
                            <input type="checkbox" name="ganti_kapasitor" id="ganti_kapasitor" class="mr-2">
                            <label for="ganti_kapasitor">Ganti kapasitor</label>
                        </div>
                        <div>
                            <input type="checkbox" name="flushing_evaporator" id="flushing_evaporator" class="mr-2">
                            <label for="flushing_evaporator">Flushing Evaporator</label>
                        </div>
                        <div>
                            <input type="checkbox" name="vacuum" id="vacuum" class="mr-2">
                            <label for="vacuum">Vacuum</label>
                        </div>
                        <div>
                            <input type="checkbox" name="flushing" id="flushing" class="mr-2">
                            <label for="flushing">Flushing</label>
                        </div>
                        <div>
                            <input type="checkbox" name="isi_oli" id="isi_oli" class="mr-2">
                            <label for="isi_oli">Isi oli</label>
                        </div>
                        <div>
                            <input type="checkbox" name="cairan_r11" id="cairan_r11" class="mr-2">
                            <label for="cairan_r11">Cairan R11</label>
                        </div>
                    </div>
                </div>

                <!-- Sparepart Section -->
                <div class="mb-6">
                    <h2 class="font-bold mb-3">Sparepart Tambahan Dari Teknisi</h2>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <input type="text" name="sparepart[]" class="border rounded p-2 w-full" placeholder="Tambah sparepart...">
                            <input type="text" name="sparepart_price[]" class="border rounded p-2 w-32" placeholder="Rp XX.XXX">
                        </div>
                        <button type="button" id="add_sparepart" class="text-blue-600 hover:text-blue-800">+ tambah sparepart</button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mb-6 space-x-2">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" id="btnNotRepairable">
                        Tidak memungkinkan untuk diperbaiki
                    </button>
                    <a href="form-freon.php" id="btnInputFreon" class="hidden bg-blue-600 text-white px-4 py-2 rounded">
                        Input Freon
                    </a>
                </div>

                <!-- File Upload -->
                <div class="mb-6">
                    <label class="block mb-2">Lampirkan Bukti Foto Serta Alasanmu</label>
                    <input type="file" name="photos[]" multiple class="border rounded p-2 w-full" accept="image/*">
                </div>

                <!-- Alasan Field -->
                <div class="mb-6">
                    <label class="block mb-2">Alasan</label>
                    <textarea name="alasan" rows="3" class="border rounded p-2 w-full"></textarea>
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
        </div>
    </div>

    <script>
        // Show/hide Input Freon button based on checkbox
        document.getElementById('isi_freon').addEventListener('change', function() {
            const btnInputFreon = document.getElementById('btnInputFreon');
            if (this.checked) {
                btnInputFreon.classList.remove('hidden');
            } else {
                btnInputFreon.classList.add('hidden');
            }
        });

        // Form submission handler
        document.getElementById('damageForm').addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Hide form
            document.getElementById('damageForm').style.display = 'none';
            
            // Show initial confirmation
            const confirmationMessage = document.getElementById('confirmationMessage');
            confirmationMessage.classList.remove('hidden');
            
            // After 3 seconds, show final confirmation
            setTimeout(() => {
                confirmationMessage.classList.add('hidden');
                document.getElementById('finalConfirmation').classList.remove('hidden');
            }, 3000);
        });

        // Final confirmation handler
        document.querySelector('#finalConfirmation button').addEventListener('click', () => {
            sessionStorage.setItem('formCompleted', 'true');
            window.location.href = 'order-details.php';
        });
    </script>
</body>
</html>