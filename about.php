<?php include './nav.php'; ?>

<body class="bg-gray-100">
    <!-- Hero Section -->
    <section id="hero_section" class="relative bg-cover bg-center h-96" style="background-image: url('https://via.placeholder.com/1500x600');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative text-center text-white py-24 px-6">
            <h1 class="text-5xl font-extrabold">Explore the Beauty of Nepal</h1>
            <p class="mt-4 text-lg">Discover stunning landscapes, rich cultures, and unforgettable experiences.</p>
            <a href="#contact" class="mt-6 inline-block bg-blue-600 text-white py-3 px-6 rounded-lg text-xl font-semibold hover:bg-blue-700 transition">Start Your Journey</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about_us" class="max-w-5xl mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-gray-800 text-center">About Us</h2>
        <p class="mt-4 text-lg text-gray-600 text-center">We are a passionate team dedicated to showcasing the beauty of Nepal. From breathtaking mountain views to cultural heritage, our mission is to connect you with the best of Nepal.</p>
    </section>

    <!-- Popular Destinations Section -->
    <section id="destinations" class="max-w-5xl mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-gray-800 text-center">Popular Destinations</h2>
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            <div class="p-6 bg-gray-100 rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="./images/pk.JPEG" alt="Pokhara" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-bold mt-4">Pokhara</h3>
                <p class="text-gray-600">A serene lakeside city, perfect for adventure seekers and nature lovers.</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="./images/man.jpg" alt="Kathmandu" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-bold mt-4">Kathmandu</h3>
                <p class="text-gray-600">The vibrant heart of Nepal, where history and culture come alive.</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="./images/mt2.jpeg" alt="Everest" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-bold mt-4">Everest Base Camp</h3>
                <p class="text-gray-600">An iconic trek to the foot of the world's highest peak, an experience of a lifetime.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="max-w-5xl mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-gray-800 text-center">What Our Travelers Say</h2>
        <div class="flex space-x-6 mt-6">
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <img src="./images/aryan.jpeg" alt="Traveler 1" class="w-16 h-16 rounded-full mx-auto">
                <p class="text-gray-600 text-center mt-4">"Nepal is a dream come true! The people, culture, and scenery are just breathtaking!"</p>
                <p class="font-semibold text-center mt-2">Aryan Walker</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <img src="./images/mira.jpeg" alt="Traveler 2" class="w-16 h-16 rounded-full mx-auto">
                <p class="text-gray-600 text-center mt-4">"An unforgettable adventure. From trekking to experiencing local life, Nepal is magical!"</p>
                <p class="font-semibold text-center mt-2">Mira Anderson</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <img src="./images/jackson.jpeg" alt="Traveler 3" class="w-16 h-16 rounded-full mx-auto">
                <p class="text-gray-600 text-center mt-4">"I felt connected to nature in a way I never have before. Truly a once-in-a-lifetime experience."</p>
                <p class="font-semibold text-center mt-2">Samir Jackson</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="max-w-5xl mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-gray-800 text-center">Contact Us</h2>
        <form action="#" method="POST" class="mt-6 space-y-4">
            <div>
                <label for="name" class="block text-lg font-medium text-gray-800">Full Name</label>
                <input type="text" id="name" name="name" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            </div>
            <div>
                <label for="email" class="block text-lg font-medium text-gray-800">Email Address</label>
                <input type="email" id="email" name="email" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            </div>
            <div>
                <label for="message" class="block text-lg font-medium text-gray-800">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required></textarea>
            </div>
            <button type="submit" class="w-full py-3 bg-blue-600 text-white text-xl font-semibold rounded-lg hover:bg-blue-700 transition">Send Message</button>
        </form>
    </section>

    <!-- Footer Section -->
    <?php include('footer.php'); ?>
</body>
</html>
