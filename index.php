<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function validateForm(event) {
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("confirm_password").value;

      if (password !== confirmPassword) {
        const errorMessage = document.getElementById("error-message");
        errorMessage.textContent = "Passwords do not match!";
        errorMessage.classList.remove("hidden");
        event.preventDefault();
      }
    }
  </script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 h-screen flex items-center justify-center">

  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-xs md:max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Create Your Account</h2>
    <form action="doregister.php" method="POST" class="space-y-4" onsubmit="validateForm(event)">
      <!-- Full Name Input -->
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input 
          type="text" 
          id="username" 
          name="username" 
          required 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="Enter your full name"
        >
      </div>
      <!-- Email Input -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          required 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="Enter your email"
        >
      </div>
      <!-- Password Input -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          required 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="Create a password"
        >
      </div>
      <!-- Confirm Password Input -->
      <div>
        <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input 
          type="password" 
          id="confirm_password" 
          name="confirm_password" 
          required 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="Confirm your password"
        >
      </div>
      <!-- Error Message -->
      <p id="error-message" class="hidden text-red-500 text-sm"></p>
      <!-- Submit Button -->
      <div>
        <button 
          type="submit" 
          class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow hover:bg-blue-600 transition duration-200">
          Sign Up
        </button>
      </div>
    </form>
    <p class="text-center text-sm text-gray-600 mt-4">
      Already have an account? 
      <a href="login.php" class="text-blue-500 hover:underline">Login</a>
    </p>

    <?php
    if (isset($_GET['message']) && $_GET['message'] === 'loggedout') {
        echo '<p class="text-center text-red-500 text-sm mt-4">
                 Remember: Logging out will delete your session data.
              </p>';
    }
    ?>
  </div>

</body>
</html>
