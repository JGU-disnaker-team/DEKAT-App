<?php
session_start();

// Initialize messages array in session
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

// Configure upload settings
$uploadDir = 'uploads/';
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Function to validate image file
function validateImage($file) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxSize = 5 * 1024 * 1024; // 5MB

    if (!in_array($file['type'], $allowedTypes)) {
        return 'Only JPG, PNG and GIF files are allowed.';
    }
    if ($file['size'] > $maxSize) {
        return 'File size must be less than 5MB.';
    }
    return true;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle text message
    if (!empty($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
        $_SESSION['messages'][] = [
            'type' => 'text',
            'content' => $message,
            'sender' => 'technician',
            'timestamp' => time()
        ];
    }

    // Handle file upload
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        $validation = validateImage($_FILES['attachment']);
        
        if ($validation === true) {
            $fileTmpPath = $_FILES['attachment']['tmp_name'];
            $fileName = uniqid() . '_' . basename($_FILES['attachment']['name']);
            $destPath = $uploadDir . $fileName;
            
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $_SESSION['messages'][] = [
                    'type' => 'image',
                    'content' => $destPath,
                    'sender' => 'technician',
                    'timestamp' => time()
                ];
            }
        } else {
            $_SESSION['upload_error'] = $validation;
        }
    }

    // Handle chat clear
    if (isset($_POST['clear_chat'])) {
        // Clear messages from session
        $_SESSION['messages'] = [];
        // Optionally clear uploaded files
        array_map('unlink', glob($uploadDir . "*"));
    }
    
    // Prevent form resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEKAT Technician Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #chat-box {
            min-height: 400px;
            max-height: 400px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }
        .chat-bubble {
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 80%;
        }
        .chat-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: 8px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
        }
        .modal-content {
            max-width: 90%;
            max-height: 90%;
            margin: auto;
            display: block;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen p-4">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg flex flex-col h-[80vh]">
        <!-- Header -->
        <div class="bg-blue-600 text-white p-4 rounded-t-lg text-center font-bold text-lg">
            Chat with Customer
        </div>

        <!-- Error Messages -->
        <?php if (isset($_SESSION['upload_error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                <?php 
                    echo $_SESSION['upload_error'];
                    unset($_SESSION['upload_error']);
                ?>
            </div>
        <?php endif; ?>

        <!-- Chat Messages -->
        <div class="flex-1 overflow-y-auto p-4 space-y-3" id="chat-box">
            <?php foreach ($_SESSION['messages'] as $message): ?>
                <div class="flex <?php echo $message['sender'] === 'technician' ? 'justify-end' : 'justify-start'; ?>">
                    <div class="chat-bubble px-4 py-2 rounded-lg shadow-md <?php echo $message['sender'] === 'technician' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-black'; ?>">
                        <?php if ($message['type'] === 'image'): ?>
                            <img src="<?php echo htmlspecialchars($message['content']); ?>" 
                                 alt="Uploaded image" 
                                 class="chat-image"
                                 onclick="showImage(this.src)">
                        <?php else: ?>
                            <?php echo $message['content']; ?>
                        <?php endif; ?>
                        <div class="text-xs mt-1 opacity-75">
                            <?php echo date('H:i', $message['timestamp']); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Input Form -->
        <form method="POST" enctype="multipart/form-data" class="p-4 border-t flex items-center space-x-2">
            <label for="file-upload" class="cursor-pointer text-blue-500 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </label>
            <input type="file" name="attachment" id="file-upload" class="hidden" accept="image/*" onchange="previewImage(this)">
            <input type="text" name="message" class="flex-1 p-2 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type your message...">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg shadow-md hover:bg-blue-600 transition">Send</button>
            <button type="submit" name="clear_chat" class="bg-red-500 text-white p-2 rounded-lg shadow-md hover:bg-red-600 transition">Clear</button>
        </form>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="modal" onclick="hideModal()">
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        // Auto-scroll to bottom of chat
        const chatBox = document.getElementById('chat-box');
        chatBox.scrollTop = chatBox.scrollHeight;

        // Image preview
        function previewImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // You could add preview functionality here if desired
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Modal functions
        function showImage(src) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.style.display = "block";
            modalImg.src = src;
        }

        function hideModal() {
            document.getElementById('imageModal').style.display = "none";
        }
    </script>
</body>
</html>