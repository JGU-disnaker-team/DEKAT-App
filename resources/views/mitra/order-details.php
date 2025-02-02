<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderan Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f8f9fe;
        }

        /* Header Styles */
        .header {
            background: white;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .back-button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
        }

        .page-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        /* Main Container Styles */
        .container {
            padding: 1rem;
            min-height: calc(100vh - 60px);
        }

        .order-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Timer Styles */
        .timer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 0.5rem;
            color: #4b5563;
            margin-bottom: 1rem;
        }

        /* Customer Info Styles */
        .customer-info {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .avatar {
            width: 4rem;
            height: 4rem;
            background: #e5e7eb;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .customer-details {
            flex-grow: 1;
        }

        .customer-details h2 {
            color: #2563eb;
            font-size: 1.125rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .customer-details span {
            color: #2563eb;
            font-size: 1rem;
        }

        .location {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            color: #6b7280;
            margin-top: 0.5rem;
        }

        .map-link {
            color: #2563eb;
            text-decoration: none;
            margin-top: 0.5rem;
            display: inline-block;
        }

        /* Service Button Styles */
        .service-buttons {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .service-button {
            background: #1e3a8a;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        /* Order Details Styles */
        .order-details {
            margin-bottom: 1.5rem;
        }

        .order-details p {
            margin-bottom: 0.5rem;
            color: #111827;
        }

        /* Additional Notes Styles */
        .additional-notes {
            margin-bottom: 1.5rem;
        }

        .notes-box {
            background: #f3f4f6;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-top: 0.5rem;
        }

        .notes-box p {
            color: #4b5563;
            margin-bottom: 0.5rem;
        }

        .notes-box p:last-child {
            margin-bottom: 0;
        }

        /* Action Button Styles */
        .action-button {
            background: #22c55e;
            color: white;
            border: none;
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .action-button:hover {
            background: #16a34a;
        }

        .icon {
            width: 1.25rem;
            height: 1.25rem;
        }

        /* Map Modal Styles */
        .map-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .map-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 1rem;
            border-radius: 0.75rem;
            width: 90%;
            max-width: 600px;
        }

        .map-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .close-map {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .map-frame {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 0.5rem;
        }

        /* Status Message Styles */
        .status-message {
            text-align: center;
            color: #6b7280;
            margin-top: 1rem;
            font-size: 1rem;
            display: none;
        }

        .rating-section {
            padding: 1.5rem;
            border-top: 1px solid #e5e7eb;
            margin-top: 1.5rem;
        }
        
        .star-btn {
            transition: transform 0.2s;
            padding: 0.5rem;
            background: none;
            border: none;
            cursor: pointer;
        }
        
        .star-btn:hover {
            transform: scale(1.1);
        }
        
        .star-btn.active svg {
            fill: #FCD34D;
            stroke: #F59E0B;
        }

        .comment-section {
            margin-top: 1rem;
        }

        .comment-section textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
        }

        .submit-rating {
            background-color: #2563eb;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: none;
            cursor: pointer;
        }

        .submit-rating:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div class="header-content">
            <button class="back-button" onclick="goBack()">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <h1 class="page-title">Orderan Baru</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="order-card">
            <!-- Timer Section -->
            <div class="timer">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                    <path stroke-linecap="round" stroke-width="2" d="M12 6v6l4 2"/>
                </svg>
                <span id="countdown">00.10.00</span>
            </div>

            <!-- Customer Info Section -->
            <div class="customer-info">
                <div class="avatar"></div>
                <div class="customer-details">
                    <h2>Siti Ariani <span>· Survei Ke Tempat</span></h2>
                    <div class="location">
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p>Jl. Margonda Raya No 22, Pancoran Mas</p>
                    </div>
                    <a href="#" class="map-link" onclick="showMap(event)">Lihat Di Peta</a>
                </div>
            </div>

            <!-- Service Buttons -->
            <div class="service-buttons">
                <button class="service-button">Perawatan</button>
                <button class="service-button">Service</button>
            </div>

            <!-- Order Details -->
            <div class="order-details">
                <p>AC Standing , 1 Buah</p>
                <p>Hari ini, 13 : 00 WIB</p>
                <p>BCA Virtual Account</p>
            </div>

            <!-- Additional Notes -->
            <div class="additional-notes">
                <p>Keluhan Tambahan :</p>
                <div class="notes-box">
                    <p>AC nya Kotor</p>
                    <p>Remote Rusak</p>
                </div>
            </div>

            <!-- Action Button and Status -->
            <button class="action-button" onclick="goToLocation()">Menuju Ke Lokasi</button>
            <p class="status-message" id="statusMessage">Anda Sedang menuju ke lokasi!</p>
            <div id="confirmationContainer" style="display: none; text-align: center; margin-top: 1rem;">
                <button class="action-button" " onclick="confirmAction()">Konfirmasi Sampai</button>
            </div>
            <p class="status-message" id="confirmationMessage" style="display: none; color: #10b981;">
                Anda telah mengkonfirmasi sampai! Isi form kerusakan <a href="form-kerusakan.php" style="color: #2563eb; text-decoration: underline;">di sini</a>.
            </p>

            <div class="rating-section">
                <h3 class="text-xl font-bold text-center mb-4">Pesanan Telah Selesai!</h3>
                <p class="text-lg font-semibold text-center mb-3">Isi Rating Pengguna ini</p>

                <div class="flex justify-center gap-2 mb-4">
                    <!-- Star Rating -->
                    <button class="star-btn p-1" data-rating="1">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </button>
                    <!-- Repeat for 5 stars -->
                    <button class="star-btn p-1" data-rating="2">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </button>
                    <button class="star-btn p-1" data-rating="3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </button>
                    <button class="star-btn p-1" data-rating="4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </button>
                    <button class="star-btn p-1" data-rating="5">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Comment section & submit button -->
                <div class="comment-section">
                    <textarea  
                        placeholder="Berikan komentar Anda..."
                        rows="3"
                    ></textarea>
                    <button class="submit-rating w-full">
                    Kirim Rating
                    </button>
                </div>
            </div>
        </div>
    </div>
        
        <div id="completion-section" class="mt-6 border-t pt-4">
            <div class="text-center">
                <p class="text-xl font-bold text-green-600 mb-4">Pesanan Telah Selesai!</p>
            </div>
        </div>
    </div>

    <!-- Map Modal -->
    <div class="map-container" id="mapModal">
        <div class="map-content">
            <div class="map-header">
                <h3>Lokasi Pelanggan</h3>
                <button class="close-map" onclick="closeMap()">&times;</button>
            </div>
            <iframe
                class="map-frame"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2446241530927!2d106.83066557418265!3d-6.365572962227131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1a804e8b85%3A0xe468e8b47e09d24!2sJl.%20Margonda%20Raya%2C%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1704821149547!5m2!1sid!2sid"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Format time function
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `00.${String(minutes).padStart(2, '0')}.${String(remainingSeconds).padStart(2, '0')}`;
        }

        // Timer function
        function startTimer(duration) {
            let timeLeft = duration;
            const countdownElement = document.getElementById('countdown');

            const timer = setInterval(function () {
                countdownElement.textContent = formatTime(timeLeft);

                if (timeLeft <= 0) {
                    clearInterval(timer);
                    return;
                }

                timeLeft -= 1;
            }, 1000);
        }

        // Back button function
        function goBack() {
            window.history.back();
        }

        // Show map function
        function showMap(event) {
            event.preventDefault();
            document.getElementById('mapModal').style.display = 'block';
        }

        // Close map function
        function closeMap() {
            document.getElementById('mapModal').style.display = 'none';
        }

        // Go to location function
        function goToLocation() {
            const statusMessage = document.getElementById('statusMessage');
            const confirmationContainer = document.getElementById('confirmationContainer');

            statusMessage.style.display = 'block';
            document.querySelector('.action-button').disabled = true;

            // Tampilkan tombol konfirmasi setelah menuju lokasi
            confirmationContainer.style.display = 'block';
        }

        // Confirm action function
        function confirmAction() {
            const confirmationContainer = document.getElementById('confirmationContainer');
            const confirmationMessage = document.getElementById('confirmationMessage');

            // Tampilkan pesan konfirmasi
            confirmationMessage.style.display = 'block';

            // Sembunyikan tombol konfirmasi setelah diklik
            confirmationContainer.style.display = 'none';

            // Opsional: Navigasi otomatis ke halaman form kerusakan setelah beberapa detik
            setTimeout(function () {
                window.location.href = 'form-kerusakan.php';
            }, 3000); // Navigasi setelah 3 detik
        }

        // Close map when clicking outside
        window.onclick = function (event) {
            const mapModal = document.getElementById('mapModal');
            if (event.target === mapModal) {
                mapModal.style.display = 'none';
            }
        }

        // Initialize timer when page loads
        document.addEventListener('DOMContentLoaded', function () {
            startTimer(600);
        });

        // Star rating functionality
        document.querySelectorAll('.star-btn').forEach(button => {
            button.addEventListener('click', () => {
                const rating = button.dataset.rating;
                const stars = document.querySelectorAll('.star-btn');
                
                stars.forEach(star => {
                    if (star.dataset.rating <= rating) {
                        star.classList.add('active');
                    } else {
                        star.classList.remove('active');
                    }
                });
            });
        });

        // Existing scripts plus rating functionality
        document.querySelectorAll('.star-btn').forEach(button => {
            button.addEventListener('click', () => {
                const rating = button.dataset.rating;
                const stars = document.querySelectorAll('.star-btn');
                
                stars.forEach(star => {
                    if (star.dataset.rating <= rating) {
                        star.classList.add('active');
                    } else {
                        star.classList.remove('active');
                    }
                });
            });
        });

        // Function to show rating section
        function showRatingSection() {
            // Check if we came from form-kerusakan.php completion
            const fromFormCompletion = sessionStorage.getItem('formCompleted');
            const ratingSection = document.querySelector('.rating-section');
            const actionButton = document.querySelector('.action-button');
            const statusMessage = document.getElementById('statusMessage');
            const confirmationContainer = document.getElementById('confirmationContainer');
            const confirmationMessage = document.getElementById('confirmationMessage');

            if (fromFormCompletion === 'true') {
                // Hide other elements
                if (actionButton) actionButton.style.display = 'none';
                if (statusMessage) statusMessage.style.display = 'none';
                if (confirmationContainer) confirmationContainer.style.display = 'none';
                if (confirmationMessage) confirmationMessage.style.display = 'none';

                // Show rating section
                if (ratingSection) {
                    ratingSection.style.display = 'block';
                }
            } else {
                // Hide rating section if not coming from form completion
                if (ratingSection) {
                    ratingSection.style.display = 'none';
                }
            }
        }

        // Function to handle rating submission
        function submitRating() {
            const ratingValue = document.querySelector('.star-btn.active')?.dataset.rating;
            const commentValue = document.querySelector('.comment-section textarea').value;
            
            // Here you would typically send this data to your backend
            console.log('Rating:', ratingValue, 'Comment:', commentValue);
            
            // Show success message
            const ratingSection = document.querySelector('.rating-section');
            ratingSection.innerHTML = `
                <div class="text-center p-4">
                    <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-green-600 mb-2">Terima Kasih Atas Penilaian Anda!</h3>
                    <p class="text-gray-600">Rating dan komentar Anda telah berhasil dikirim.</p>
                </div>
            `;
            
            // Clear the form completion flag
            sessionStorage.removeItem('formCompleted');
        }

        // Add event listener for the submit rating button
        document.addEventListener('DOMContentLoaded', function() {
            showRatingSection();
            
            const submitButton = document.querySelector('.submit-rating');
            if (submitButton) {
                submitButton.addEventListener('click', submitRating);
            }
        });
    </script>
</body>
</html>