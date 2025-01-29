<?php
session_start();

// Initialize messages array in session
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['message'])) {
    $message = htmlspecialchars($_POST['message']);
    $sender = 'technician'; // Assuming the technician is sending the message
    $_SESSION['messages'][] = ['text' => $message, 'sender' => $sender];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEKAT Technician Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg flex flex-col h-[80vh]">
        <div class="bg-blue-600 text-white p-4 rounded-t-lg text-center font-bold text-lg">Chat with Customer</div>
        <div class="flex-1 overflow-y-auto p-4 space-y-2" id="chat-box">
            <?php foreach ($_SESSION['messages'] as $message): ?>
                <div class="flex <?php echo $message['sender'] === 'technician' ? 'justify-end' : 'justify-start'; ?>">
                    <div class="max-w-xs px-4 py-2 rounded-lg shadow-md <?php echo $message['sender'] === 'technician' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-black'; ?>">
                        <?php echo $message['text']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <form method="POST" class="p-4 border-t flex items-center space-x-2">
            <input type="text" name="message" class="flex-1 p-2 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type your message..." required>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg shadow-md hover:bg-blue-600 transition">Send</button>
        </form>
    </div>
</body>
</html>
