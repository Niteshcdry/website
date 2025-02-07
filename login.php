<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body >
 <!-- Navbar -->
 <nav class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold flex items-center">
                <i class="bi bi-airplane me-2"></i><span style="color:red; margin-right: 8px;"> Nepal</span>Tourism
            </a>
            
          
            
            <!-- Action Buttons -->
            <div class="hidden md:flex space-x-4">
                <a href="./signup.php" class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600">Sign Up</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-2xl">
                <i class="bi bi-list"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center bg-blue-700 py-4 space-y-4">

            <a href="./signup.php" class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600">Sign Up</a>
        </div>
    </nav>
    
<div class="bg-gray-100 flex items-center justify-center h-screen">


    <!-- Login Form -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-96" id="loginContainer">
        <div class="text-center mb-6">
            <i class="bi bi-person-circle text-6xl text-blue-500"></i>
            <h1 class="text-2xl font-bold mt-4">Welcome</h1>
            <p class="text-gray-600">Sign in to continue</p>
        </div>

        <form id="loginForm" action="home.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Sign In
            </button>

            <div class="mt-4 text-center">
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot your password?</a>
            </div>
        </form>
    </div>

    <!-- Success Message -->
    <div id="successMessage" class="hidden bg-white p-6 rounded-lg shadow-lg w-96 text-center">
        <i class="bi bi-check-circle text-6xl text-green-500"></i>
        <h2 class="text-xl font-bold mt-4 text-green-600">Login Successful!</h2>
        <p class="text-gray-600 mt-2">Welcome back! Redirecting...</p>
    </div>
    </div>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent actual form submission
            
            document.getElementById("loginContainer").classList.add("hidden");
            document.getElementById("successMessage").classList.remove("hidden");
            
            setTimeout(() => {
                window.location.href = "home.php"; // Redirect to home.php
            }, 1000);
        });
    </script>
</body>
</html>
