<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-lg py-8 px-20 max-w-sm text-center">
        <?php
        if (isset($_GET["error"]) && $_GET["error"] == 1) {
            echo "<h1 class='text-xl font-bold text-black mb-2'>Invalid Email</h1>";
            echo "<img src='assets/error.png' class='justify-self-center mb-2'>";
            echo "<a href='login.php' class='text-blue-500 hover:underline text-sm'>Try Again</a>";
        } elseif (isset($_GET["error"]) && $_GET["error"] == 2) {
            echo "<h1 class='text-xl font-bold text-black mb-4'>Invalid Password</h1>";
            echo "<img src='assets/error.png' class='justify-self-center mb-2'>";
            echo "<a href='login.php' class='text-blue-500 hover:underline text-sm'>Try Again</a>";
        } else {
            header("Location: welcome.php");
            exit;
        }
        ?>
    </div>

</body>
</html>
