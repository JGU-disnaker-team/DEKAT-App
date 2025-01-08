<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Penarikan Saldo</title>
    <script src="https://kit.fontawesome.com/58c31d4a0e.js" crossorigin="anonymous"></script>
    <style>
        /* ... style sebelumnya tetap sama ... */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fe;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .title {
            color: #333;
            font-size: 24px;
        }

        .search-box {
            display: flex;
            gap: 10px;
        }

        input[type="search"], 
        input[type="date"] {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        input[type="search"]:focus, 
        input[type="date"]:focus {
            border-color: #007bff;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            color: #333;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .status {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: 500;
        }

        .status-success {
            background-color: #d4edda;
            color: #155724;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-failed {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Styling untuk navigation bar yang baru */
        .navigation-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background-color: #0B42D9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .back-button:before {
            font-size: 18px;
        }

        .pagination {
            display: flex;
            gap: 10px;
        }

        .pagination button {
            padding: 8px 12px;
            border: 1px solid #ddd;
            background-color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .pagination button:hover {
            background-color: #f5f5f5;
        }

        .pagination button.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                flex-direction: column;
            }

            .navigation-bar {
                flex-direction: column;
                gap: 15px;
                align-items: stretch;
            }

            .back-button {
                order: 2;
                text-align: center;
                justify-content: center;
            }

            .pagination {
                order: 1;
                justify-content: center;
            }

            th, td {
                padding: 8px;
                font-size: 14px;
            }

            .title {
                font-size: 20px;
                text-align: center;
            }

            .status {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Log Penarikan Saldo</h1>
            <div class="search-box">
                <input type="search" placeholder="Cari transaksi..." id="searchInput">
                <input type="date" id="dateFilter">
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Bank</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="transactionTableBody">
                    <!-- Data akan diisi oleh JavaScript -->
                </tbody>
            </table>
        </div>

        <!-- Navigation bar yang baru -->
        <div class="navigation-bar">
            <button class="back-button" onclick="goBack()">Kembali</button>
            <div class="pagination">
                <button onclick="changePage(1)">1</button>
                <button onclick="changePage(2)">2</button>
                <button onclick="changePage(3)">3</button>
            </div>
        </div>
    </div>

    <script>
        // Script JavaScript tetap sama seperti sebelumnya
        function goBack() {
            window.history.back();
        }

        const sampleData = [
            {
                id: "TRX001",
                date: "2025-01-09",
                amount: "Rp 150.000",
                bank: "BCA",
                status: "success"
            },
            {
                id: "TRX002",
                date: "2025-01-08",
                amount: "Rp 200.000",
                bank: "Mandiri",
                status: "pending"
            },
            {
                id: "TRX003",
                date: "2025-01-07",
                amount: "Rp 100.000",
                bank: "BNI",
                status: "failed"
            }
        ];

        function getStatusClass(status) {
            switch(status) {
                case 'success':
                    return 'status-success';
                case 'pending':
                    return 'status-pending';
                case 'failed':
                    return 'status-failed';
                default:
                    return '';
            }
        }

        function getStatusText(status) {
            switch(status) {
                case 'success':
                    return 'Berhasil';
                case 'pending':
                    return 'Menunggu';
                case 'failed':
                    return 'Gagal';
                default:
                    return status;
            }
        }

        function renderTransactions(data) {
            const tableBody = document.getElementById('transactionTableBody');
            tableBody.innerHTML = '';

            data.forEach(transaction => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${transaction.id}</td>
                    <td>${transaction.date}</td>
                    <td>${transaction.amount}</td>
                    <td>${transaction.bank}</td>
                    <td><span class="status ${getStatusClass(transaction.status)}">${getStatusText(transaction.status)}</span></td>
                `;
                tableBody.appendChild(row);
            });
        }

        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const filteredData = sampleData.filter(transaction => 
                transaction.id.toLowerCase().includes(searchTerm) ||
                transaction.bank.toLowerCase().includes(searchTerm) ||
                transaction.amount.toLowerCase().includes(searchTerm)
            );
            renderTransactions(filteredData);
        });

        document.getElementById('dateFilter').addEventListener('change', function(e) {
            const selectedDate = e.target.value;
            const filteredData = sampleData.filter(transaction => 
                transaction.date === selectedDate
            );
            renderTransactions(filteredData.length > 0 ? filteredData : sampleData);
        });

        function changePage(page) {
            const buttons = document.querySelectorAll('.pagination button');
            buttons.forEach(button => {
                button.classList.remove('active');
                if (button.textContent == page) {
                    button.classList.add('active');
                }
            });
        }

        renderTransactions(sampleData);
    </script>
</body>
</html>