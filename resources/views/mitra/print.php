<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Laporan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f8f9fe;
            padding: 20px;
        }

        .print-container {
            background: white;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .report-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .report-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1F2937;
        }

        .report-section {
            margin-bottom: 30px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 10px;
            margin-bottom: 20px;
        }

        .info-label {
            font-weight: bold;
            color: #374151;
        }

        .info-value {
            color: #1F2937;
        }

        .detail-section {
            border-top: 1px solid #E5E7EB;
            padding-top: 20px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }

        .result-section {
            border-top: 1px solid #E5E7EB;
            padding-top: 20px;
        }

        .stamp-section {
            margin-top: 40px;
            text-align: center;
        }

        .stamp {
            width: 120px;
            height: 120px;
            margin: 10px auto;
        }

        .consumer-name {
            margin-top: 10px;
            font-weight: bold;
        }

        .action-buttons {
            margin-top: 30px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            border: none;
        }

        .btn-print {
            background: #0047FF;
            color: white;
        }

        .btn-back {
            background: #E5E7EB;
            color: #374151;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .print-container {
                box-shadow: none;
                padding: 20px;
            }

            .action-buttons {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .print-container {
                padding: 20px;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 5px;
            }

            .info-label {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="print-container">
        <div class="report-header">
            <h1 class="report-title">Laporan Pekerjaan Teknisi AC</h1>
        </div>

        <div class="report-section">
            <div class="info-grid">
                <span class="info-label">Tanggal</span>
                <span class="info-value">10 Januari 2025</span>

                <span class="info-label">Nama Teknisi</span>
                <span class="info-value">Randi</span>

                <span class="info-label">Lokasi</span>
                <span class="info-value">Jl. Margonda Raya</span>

                <span class="info-label">Jenis Layanan</span>
                <span class="info-value">Perawatan dan Perbaikan</span>
            </div>
        </div>

        <div class="detail-section">
            <h2 class="info-label">Detail Pekerjaan:</h2>
            <div class="detail-grid">
                <div>
                    <div class="info-label">Jenis AC</div>
                    <div class="info-value">Split wall Mounted</div>
                </div>
                <div>
                    <div class="info-label">Merk</div>
                    <div class="info-value">Panasonic</div>
                </div>
                <div>
                    <div class="info-label">Kapasitas</div>
                    <div class="info-value">1 PK</div>
                </div>
                <div>
                    <div class="info-label">Keluhan</div>
                    <div class="info-value">AC Tidak Dingin</div>
                </div>
                <div>
                    <div class="info-label">Yang dilakukan Teknisi</div>
                    <div class="info-value">
                        - Membersihkan Filter<br>
                        - Memperbaiki Kebocoran Pipa
                    </div>
                </div>
                <div>
                    <div class="info-label">Durasi Pengerjaan</div>
                    <div class="info-value">2 Jam (12:00 - 14:00)</div>
                </div>
            </div>
        </div>

        <div class="result-section">
            <h2 class="info-label">Hasil Pekerjaan:</h2>
            <div class="info-value">
                AC Kembali Normal dan Dingin<br>
                Tidak Ada Kebocoran Lagi
            </div>
        </div>

        <div class="stamp-section">
            <div class="info-label">Konsumen:</div>
            <img src="/api/placeholder/120/120" alt="Stamp" class="stamp">
            <div class="consumer-name">Siti Ariani</div>
        </div>

        <div class="action-buttons">
            <button class="btn btn-print" onclick="window.print()">Print Laporan</button>
            <button class="btn btn-back" onclick="window.history.back()">Kembali</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add any additional JavaScript functionality here if needed
        });
    </script>
</body>
</html>