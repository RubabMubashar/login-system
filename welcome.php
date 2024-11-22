<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 h-screen flex items-center justify-center text-gray-100">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-xs md:max-w-md text-center text-gray-800">
        <!-- Welcome Message -->
        <h1 class="text-3xl font-bold mb-4">Welcome, <span class="text-blue-600"><?php echo htmlspecialchars($username); ?></span>!</h1>

        <!-- Motivational Quote -->
        <p class="text-lg italic mb-6">"Have a nice day! Remember, every great achievement starts with the decision to try."</p>

        <!-- Fun Addition -->
        <p class="text-sm text-gray-500 mb-6">✨ Keep learning, growing, and coding! ✨</p>

        <!-- Logout Button -->
        <a href="logout.php" class="inline-block bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition duration-200">
            Logout
        </a>
    </div>

</body>
</html>
