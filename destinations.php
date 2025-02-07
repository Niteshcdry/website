<?php include './nav.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Nepal</title>

    <!-- CSS for advanced animations -->
    <style>
        .slide {
            position: absolute;
            opacity: 0;
            transform: scale(1.05);
            transition: opacity 1.2s ease-in-out, transform 1.2s ease-in-out;
        }

        .slide.active {
            opacity: 1;
            transform: scale(1);
        }

        /* Stylish Dots */
        .dot {
            transition: background-color 0.4s ease, transform 0.4s ease;
            border: 2px solid white;
        }

        .dot.active {
            background-color: rgb(128, 126, 126);
            transform: scale(1.4);
            opacity: 1;
        }

        /* Text Animation */
        .slide-text {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .slide-text.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Hero Section with Interactive Image Slider -->
    <section id="hero" class="relative h-[550px] w-full overflow-hidden">
        <div class="absolute inset-0 w-full h-full slider-container">
            <div class="slider w-full h-full">
                <img src="images/patan.jpeg" class="slide w-full h-full object-cover" alt="Beautiful Nepal">
                <img src="images/tent.jpeg" class="slide w-full h-full object-cover" alt="Mountain View">
                <img src="images/ktm.jpg" class="slide w-full h-full object-cover" alt="Cultural Heritage">
            </div>
        </div>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative text-center text-white py-40 px-6 z-10 slide-text">
            <h1 class="text-6xl font-extrabold tracking-wide drop-shadow-lg">Journey to the Timeless Destinations of Nepal</h1>
            <p class="mt-6 text-lg max-w-3xl mx-auto drop-shadow-md">Discover Nepal's most iconic districts and their renowned landmarks.</p>
        </div>

        <!-- Stylish Navigation Dots -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
            <span class="dot w-3 h-3 bg-white opacity-50 rounded-full cursor-pointer"></span>
            <span class="dot w-3 h-3 bg-white opacity-50 rounded-full cursor-pointer"></span>
            <span class="dot w-3 h-3 bg-white opacity-50 rounded-full cursor-pointer"></span>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="max-w-7xl mx-auto mt-16 px-6 text-center">
        <h2 class="text-5xl font-bold text-gray-800 mb-10">Popular Destinations</h2>
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" style="margin-bottom:23px;">
            <!-- Destination 1: Kathmandu -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-500 cursor-pointer hover:shadow-2xl">
                <img src="images/pp.jpeg" alt="Kathmandu" class="w-full h-60 object-cover transition-all duration-300 transform group-hover:scale-110">
                <div class="p-6">
                    <h3 class="text-3xl font-semibold text-gray-800">Kathmandu</h3>
                    <p class="text-gray-600 mt-4">Capital city with historic landmarks like Swayambhunath.</p>
                    <button onclick="toggleKathmandu()" class="mt-4 text-blue-500 text-lg font-medium hover:underline">Read More</button>
                    <div id="kathmandu-places" class="hidden mt-4">
                        <ul class="list-disc pl-6 text-gray-600">
                            <li>Pashupatinath Temple</li>
                            <li>Swayambhunath Stupa</li>
                            <li>Boudhanath Stupa</li>
                            <li>Durbar Square</li>
                            <li>Garden of Dreams</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Destination 2: Pokhara -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-500 cursor-pointer hover:shadow-2xl">
                <img src="images/pppp.jpeg" alt="Pokhara" class="w-full h-60 object-cover transition-all duration-300 transform group-hover:scale-110">
                <div class="p-6">
                    <h3 class="text-3xl font-semibold text-gray-800">Pokhara</h3>
                    <p class="text-gray-600 mt-4">Scenic city with Phewa Lake, Annapurna views, and thrilling paragliding experiences.</p>
                    <button onclick="togglePokhara()" class="mt-4 text-blue-500 text-lg font-medium hover:underline">Read More</button>
                    <div id="pokhara-places" class="hidden mt-4">
                        <ul class="list-disc pl-6 text-gray-600">
                            <li>Phewa Lake</li>
                            <li>Mahendra Cave</li>
                            <li>Gupteshwor Cave</li>
                            <li>World Peace Pagoda</li>
                            <li>Devi's Fall</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Destination 3: Janakpur -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-500 cursor-pointer hover:shadow-2xl">
                <img src="images/jj1.jpeg" alt="Janakpur" class="w-full h-60 object-cover transition-all duration-300 transform group-hover:scale-110">
                <div class="p-6">
                    <h3 class="text-3xl font-semibold text-gray-800">Janakpur</h3>
                    <p class="text-gray-600 mt-4">Famous for Janaki Temple and religious significance.</p>
                    <button onclick="toggleJanakpur()" class="mt-4 text-blue-500 text-lg font-medium hover:underline">Read More</button>
                    <div id="janakpur-places" class="hidden mt-4">
                        <ul class="list-disc pl-6 text-gray-600">
                            <li>Janaki Temple</li>
                            <li>Dhanushadham</li>
                            <li>Ram Mandir</li>
                            <li>Shree Hari Mandir</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- JavaScript for Enhanced Interactivity (Retained) -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const slideText = document.querySelector('.slide-text');
        const totalSlides = slides.length;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
            });

            slides[index].classList.add('active');
            dots[index].classList.add('active');

            // Animate text with each slide
            slideText.classList.remove('active');
            setTimeout(() => slideText.classList.add('active'), 100);
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Dot Navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
                resetInterval();
            });
        });

        // Pause on Hover
        document.querySelector('.slider-container').addEventListener('mouseenter', () => clearInterval(slideInterval));
        document.querySelector('.slider-container').addEventListener('mouseleave', () => startInterval());

        function startInterval() {
            slideInterval = setInterval(nextSlide, 4000);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        // Initialize the slider
        showSlide(currentSlide);
        startInterval();
    </script>

    <!-- JavaScript for toggling the "Read More" sections -->
    <script>
        function toggleKathmandu() {
            const kathmanduPlaces = document.getElementById("kathmandu-places");
            kathmanduPlaces.classList.toggle("hidden");
        }

        function togglePokhara() {
            const pokharaPlaces = document.getElementById("pokhara-places");
            pokharaPlaces.classList.toggle("hidden");
        }

        function toggleJanakpur() {
            const janakpurPlaces = document.getElementById("janakpur-places");
            janakpurPlaces.classList.toggle("hidden");
        }
    </script>

</body>

</html>