<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 h-screen flex items-center justify-center">

  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-xs md:max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">login</h2>
    <form action="dologin.php" method="POST" class="space-y-4">
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
          placeholder="Enter your password"
        >
      </div>
      <!-- Submit Button -->
      <div>
        <button 
          type="submit" 
          class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow hover:bg-blue-600 transition duration-200">
          Login
        </button>
      </div>
    </form>
    <p class="text-center text-sm text-gray-600 mt-4">
      Don’t have an account? 
      <a href="index.php" class="text-blue-500 hover:underline">Sign up</a>
    </p>
  </div>

</body>
</html>
