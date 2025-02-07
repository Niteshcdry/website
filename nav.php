<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Tourism</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold flex items-center">
                <i class="bi bi-airplane me-2"></i> <span style="color:red; margin-right: 8px;"> Nepal</span> Tourism
            </a>
            
            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6 text-lg">
                <li><a href="home.php" class="hover:text-gray-300">Home</a></li>
                <li><a href="Destinations.php" class="hover:text-gray-300">Destinations</a></li>
                <li><a href="package.php" class="hover:text-gray-300">Packages</a></li>
                <li><a href="Blog.php" class="hover:text-gray-300">Blog</a></li>
                <li><a href="About.php" class="hover:text-gray-300">About</a></li>
            </ul>
            
            <!-- Action Buttons -->
            <div class="hidden md:flex space-x-4">
                <a href="login.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200">Login</a>
                <a href="./signup.php" class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600">Sign Up</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-2xl">
                <i class="bi bi-list"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center bg-blue-700 py-4 space-y-4">
            <a href="home.php" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Destinations</a>
            <a href="#" class="hover:text-gray-300">Tours</a>
            <a href="#" class="hover:text-gray-300">Contact</a>
            <a href="About.php" class="hover:text-gray-300">About</a>
            <a href="login.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200">Login</a>
            <a href="./signup.php" class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600">Sign Up</a>
        </div>
    </nav>
