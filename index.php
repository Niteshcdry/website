<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Tourism</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold flex items-center">
                <i class="bi bi-airplane me-2"></i> <span id="navlogo">Nepal Tourism</span>
            </a>
            
            <ul class="hidden md:flex space-x-6 text-lg">
                <li><a href="home.php" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">Destinations</a></li>
                <li><a href="#" class="hover:text-gray-300">Tours</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
                <li><a href="#" class="hover:text-gray-300">About</a></li>
            </ul>
            
            <div class="hidden md:flex space-x-4">
                <a href="login.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200">Login</a>
                <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600">Sign Up</a>
            </div>
            
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
            <a href="#" class="hover:text-gray-300">About</a>
            <a href="login.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200">Login</a>
            <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600">Sign Up</a>
        </div>
    </nav>

    <?php include 'footer.php'; ?>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
