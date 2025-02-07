<?php include './nav.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Nepal</title>

    <!-- Advanced CSS for Hero Slider and Packages -->
    <style>
        /* General Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        /* Hero Section Slider */
        .slider-container {
            position: relative;
            width: 100%;
            height: 550px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out, transform 1.5s ease-in-out;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1.1);
            /* Parallax zoom-in effect */
            transition: transform 4s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .slide.active img {
            transform: scale(1);
            /* Zoom-out to normal scale when active */
        }

        /* Gradient Overlay for Better Readability */
        .gradient-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7));
            z-index: 1;
        }

        /* Navigation Dots - Small, Square, White */
        .dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 2;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 2px;
            cursor: pointer;
            opacity: 0.5;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .dot.active {
            opacity: 1;
            transform: scale(1.2);
        }

        /* Text Overlay Styling with Advanced Animations */
        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 2;
        }

        .hero-heading {
            font-size: 2.5rem;
            letter-spacing: 1px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .hero-subtext {
            font-size: 1rem;
            font-weight: 300;
            letter-spacing: 0.5px;
            color: #e0e0e0;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1.2s ease, transform 1.2s ease;
        }

        /* Custom Text Animations per Slide */
        .slide.active .hero-heading {
            opacity: 1;
            transform: translateY(0);
        }

        .slide.active .hero-subtext {
            opacity: 1;
            transform: translateY(0);
        }

        /* Slide 1: Slide-in from Left */
        .slide:nth-child(1) .hero-heading {
            transform: translateX(-50px);
        }

        .slide.active:nth-child(1) .hero-heading {
            transform: translateX(0);
        }

        /* Slide 2: Slide-in from Right */
        .slide:nth-child(2) .hero-heading {
            transform: translateX(50px);
        }

        .slide.active:nth-child(2) .hero-heading {
            transform: translateX(0);
        }

        /* Slide 3: Slide-in from Top */
        .slide:nth-child(3) .hero-heading {
            transform: translateY(-50px);
        }

        .slide.active:nth-child(3) .hero-heading {
            transform: translateY(0);
        }

        /* Package Section Styling */
        #packages h2 {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease, transform 1s ease;
        }

        #packages.visible h2 {
            opacity: 1;
            transform: translateY(0);
        }

        .package {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out, opacity 1s ease;
            opacity: 0;
            transform: translateY(50px);
        }

        .package.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .package:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .package img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .package h3 {
            font-size: 1.5rem;
            margin-top: 1rem;
        }

        .package p {
            color: #666;
        }

        .package a {
            display: inline-block;
            margin-top: 1rem;
            background: #007BFF;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            transition: background 0.3s ease-in-out;
        }

        .package a:hover {
            background: #0056b3;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Hero Section with Advanced Image Slider -->
    <section id="hero" class="slider-container">
        <!-- Slide 1: Sarangkot -->
        <div class="slide active">
            <img src="images/sarangkot.jpeg" alt="Sarangkot">
            <div class="gradient-overlay"></div>
            <div class="text-overlay">
                <h1 class="hero-heading">Sunrise Serenity at Sarangkot</h1>
                <p class="hero-subtext">Experience breathtaking panoramic views of the Himalayas at dawn.</p>
            </div>
        </div>

        <!-- Slide 2: Swayambhunath -->
        <div class="slide">
            <img src="images/ss.jpeg" alt="Swayambhunath">
            <div class="gradient-overlay"></div>
            <div class="text-overlay">
                <h1 class="hero-heading">The Spiritual Heights of Swayambhunath</h1>
                <p class="hero-subtext">Explore Nepal's ancient stupa and its serene, spiritual ambiance.</p>
            </div>
        </div>

        <!-- Slide 3: Machapuchre -->
        <div class="slide">
            <img src="images/machapuchre.jpeg" alt="Machapuchre">
            <div class="gradient-overlay"></div>
            <div class="text-overlay">
                <h1 class="hero-heading">Discover the Majesty of Machapuchre</h1>
                <p class="hero-subtext">Witness the awe-inspiring beauty of the sacred Fishtail Mountain.</p>
            </div>
        </div>

        <!-- Navigation Dots -->
        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="max-w-7xl mx-auto mt-16 px-6 text-center">
        <h2 class="text-5xl font-bold text-gray-800">Our Best Travel Packages</h2>
        <div class="grid md:grid-cols-3 gap-10 mt-12">
            <!-- Package 1 -->
            <div class="package">
                <img src="images/everest.jpg" alt="Everest Base Camp">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Everest Base Camp Trek</h3>
                    <p class="text-gray-600 mt-3">Experience the adventure of a lifetime at the world's highest peak.</p>
                    <a href="#">Visit</a>
                </div>
            </div>

            <!-- Package 2 -->
            <div class="package">
                <img src="images/mn.jpeg" alt="Kathmandu Valley">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Cultural Tour - Kathmandu</h3>
                    <p class="text-gray-600 mt-3">Discover the rich history and architecture of Nepal's capital.</p>
                    <a href="#">Visit</a>
                </div>
            </div>

            <!-- Package 3 -->
            <div class="package">
                <img src="images/ppp.jpeg" alt="Pokhara Tour">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Pokhara Scenic Tour</h3>
                    <p class="text-gray-600 mt-3">Enjoy the serene beauty of Pokhara’s lakes, mountains, and adventurous paragliding.</p>
                    <a href="#">Visit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Image Slider with 2-Second Auto-Slide -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
            });

            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Dot Navigation Click
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
                resetInterval();
            });
        });

        // Auto Slide Interval (3 Seconds)
        let slideInterval = setInterval(nextSlide, 3000);

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 3000);
        }

        // Initialize the first slide
        showSlide(currentSlide);
    </script>

    <!-- JavaScript for Packages Section Animation -->
    <script>
        const packageSection = document.querySelector('#packages');
        const packages = document.querySelectorAll('.package');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    packageSection.classList.add('visible');
                    packages.forEach((pkg, index) => {
                        setTimeout(() => pkg.classList.add('visible'), index * 200);
                    });
                }
            });
        }, {
            threshold: 0.3
        });

        observer.observe(packageSection);
    </script>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>

</html>