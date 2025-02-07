<?php include('nav.php') ?>
    <!-- Home Content -->
    <section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
        <video autoplay loop muted playsinline class="absolute w-full h-full object-cover">
            <source src="images/shine.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="relative z-10 bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="text-4xl md:text-6xl font-bold">Explore the Beauty of Nepal</h1>
            <p class="text-lg mt-4">Find the best destinations and tours for your next adventure.</p>
            <a href="Destinations.php" class="mt-6 inline-block bg-yellow-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-yellow-600">Get Started</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
