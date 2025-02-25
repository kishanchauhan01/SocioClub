<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IN:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div id="root">
        <div class="flex overflow-hidden flex-col bg-white">
            <header class="relative flex flex-wrap gap-5 items-center justify-between w-full max-w-6xl mx-auto text-2xl text-black px-6 py-4"><img loading="lazy" src="./images/logo.png" class="object-contain shrink-0 max-w-28 aspect-[1.46] w-24" alt="Logo"><button class="md:hidden z-50 p-2" aria-label="Toggle menu"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg></button>
                <nav class="
        hidden 
        md:flex flex-col md:flex-row 
        absolute md:relative 
        top-full md:top-auto 
        left-0 md:left-auto 
        w-full md:w-auto 
        bg-white md:bg-transparent 
        p-4 md:p-0 
        gap-4 md:gap-2 
        shadow-lg md:shadow-none
        z-40
        transition-all duration-300 ease-in-out
        items-center
      "><a href="#about" class="block text-center text-lg font-semibold text-black bg-gray-200 hover:bg-black hover:text-white transition-colors border border-transparent rounded-full px-4 py-2 shadow-md w-1/2 md:w-full">About</a><a href="#gallery" class="block text-center text-lg font-semibold text-black bg-gray-200 hover:bg-black hover:text-white transition-colors border border-transparent rounded-full px-4 py-2 shadow-md w-1/2 md:w-full">Gallery</a><a href="#contact" class="block text-center text-lg font-semibold text-black bg-gray-200 hover:bg-black hover:text-white transition-colors border border-transparent rounded-full px-4 py-2 shadow-md w-1/2 md:w-full text-nowrap">Contact Us</a></nav>
            </header>
            <section class="max-w-6xl mx-auto px-8 py-12 md:py-20">
                <div class="flex flex-col md:flex-row sm:gap-24 gap-16 items-center relative">
                    <div class="w-full md:w-1/2 space-y-6 md:space-y-10 flex flex-col items-center sm:items-start gap-0 md:mt-[-100px]">
                        <h1 class="text-2xl md:text-5xl font-bold leading-tight text-center sm:text-left">Do You want to participate?</h1>
                        <p class="text-xl md:text-3xl text-center sm:text-left">there are so many events in BIZVISTA '25</p><a class="my-5" href="/form" data-discover="true"><button class="px-8 py-2 md:py-4 bg-yellow-300 rounded-full text-xl md:text-3xl 
            hover:bg-yellow-400 transition-colors transform hover:scale-105 
            duration-200 focus:outline-none focus:ring-2 focus:ring-yellow-500" aria-label="Register for BIZVISTA '25">Register</button></a>
                    </div>
                    <div class="w-full md:w-1/2"><img loading="lazy" src="./images/hero-image-max.jpg" class="w-full h-auto rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300" alt="BIZVISTA event illustration"></div>
                </div>
            </section>
            <div class="mt-20 w-full border border-black border-solid min-h-[1px] max-md:mt-10 max-md:max-w-full"></div>
            <section class="max-w-7xl mx-auto px-24 py-12" id="gallery">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
                    <div class="relative group overflow-hidden rounded-lg shadow-lg"><img loading="lazy" src="./images/bizvista-24/2024 (1).jpg" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg shadow-lg"><img loading="lazy" src="./images/bizvista-24/2024 (2).jpg" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg shadow-lg"><img loading="lazy" src="./images/bizvista-24/2024 (3).jpg" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg shadow-lg"><img loading="lazy" src="./images/bizvista-24/2024 (4).jpg" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg shadow-lg"><img loading="lazy" src="./images/bizvista-24/2024 (5).jpg" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg shadow-lg"><img loading="lazy" src="./images/bizvista-24/2024 (6).jpg" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300"></div>
                    </div>
                </div>
                <div class="flex justify-center mt-10"><button class="flex items-center gap-3 text-2xl font-medium hover:text-yellow-500 transition-colors">Show More<svg class="w-6 h-6 transform transition-transform duration-300 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></button></div>
            </section>
            <div class="mt-10 w-full border border-black border-solid min-h-[1px] max-md:max-w-full"></div>
            <section class="max-w-7xl mx-auto px-8 py-16" id="about">
                <div class="flex flex-col md:flex-row gap-16 items-center">
                    <div class="w-full lg:w-3/5"><img loading="lazy" src="./images/school of managemnet.jpg" class="w-full lg:w-5/6 h-auto rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-300" alt="About BIZVISTA"></div>
                    <div class="w-full lg:w-2/5 space-y-8">
                        <h2 class="text-4xl md:text-4xl lg:text-6xl font-bold text-neutral-950">About Us</h2>
                        <p class="text-lg md:text-2xl sm:text-xl text-neutral-800 leading-relaxed">School of Management, RK University organised one of the biggest management fests 'BIZVISTA 2025' at RK University Main Campus. Various interesting competitions like Biztainment Quiz, Movies Mantra, Treasure Hunt, Photo Click, Rangoli &amp; Business Plan, served as platforms for skill enhancement, fostering creativity, and refining strategic thinking, helping participants elevate their skills and broaden their perspectives.</p>
                    </div>
                </div>
            </section>
            <div class="mt-24 w-full border border-black border-solid min-h-[1px] max-md:mt-10 max-md:max-w-full"></div>
            <section class="max-w-6xl mx-auto px-6 py-16" id="contact">
                <div class="flex flex-col md:flex-row gap-12">
                    <div class="w-full lg:w-1/3 space-y-8">
                        <h2 class="text-4xl md:text-5xl font-bold text-black">Get in Touch</h2>
                        <p class="text-lg font-light text-gray-700 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <form class="w-full lg:w-2/3 space-y-4"><input type="text" name="name" placeholder="Name" class="w-full px-6 py-4 text-xl bg-lime-100 rounded-lg 
                     focus:outline-none focus:ring-2 focus:ring-lime-300 
                     transition-shadow" required="" value=""><input type="tel" name="contactNumber" placeholder="Contact Number" class="w-full px-6 py-4 text-xl bg-lime-100 rounded-lg 
                     focus:outline-none focus:ring-2 focus:ring-lime-300 
                     transition-shadow" required="" value="">
                        <div><input type="email" name="email" placeholder="Email" class="w-full px-6 py-4 text-xl bg-lime-100 rounded-lg 
                     focus:outline-none focus:ring-2 focus:ring-lime-300 
                     transition-shadow " required="" value=""></div><textarea name="message" placeholder="Message" rows="6" class="w-full px-6 py-4 text-xl bg-lime-100 rounded-lg 
                     focus:outline-none focus:ring-2 focus:ring-lime-300 
                     transition-shadow resize-none" required=""></textarea><button type="submit" class="w-full md:w-auto px-8 py-4 bg-lime-500 text-white rounded-lg
                     hover:bg-lime-600 transition-colors transform hover:scale-105
                     duration-200 focus:outline-none focus:ring-2 focus:ring-lime-500">Send Message</button>
                    </form>
                </div>
            </section>
            <footer class="bg-stone-800 text-white mt-8">
                <div class="max-w-7xl mx-auto px-6 py-8">
                    <div class="border-t border-gray-600 pt-8">
                        <div class="flex flex-row justify-between items-start md:items-center gap-8">
                            <div class="space-y-4">
                                <h3 class="text-2xl md:text-3xl font-semibold">Contact</h3>
                                <nav class="flex flex-col gap-1"><a href="mailto:adholakiya398@rku.ac.in" class="hover:text-yellow-300 transition-colors duration-200" target="_blank" rel="noopener noreferrer">Email</a><a href="https://linkedin.com/in/anshdholakiya" class="hover:text-yellow-300 transition-colors duration-200" target="_blank" rel="noopener noreferrer">LinkedIn</a><a href="https://instagram.com/bizvista" class="hover:text-yellow-300 transition-colors duration-200" target="_blank" rel="noopener noreferrer">Instagram</a><a href="https://twitter.com/bizvista" class="hover:text-yellow-300 transition-colors duration-200" target="_blank" rel="noopener noreferrer">Twitter</a></nav>
                            </div><img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/8a2c084c3a5848bcba2dd95c1143f82d/cc1e1834b26603583f1b4d111a0421409440abc33c2d999279fe7a0e7e0d300a?apiKey=8a2c084c3a5848bcba2dd95c1143f82d&amp;" class="w-36 md:w-64 object-contain" alt="BIZVISTA Footer Logo">
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script type="module" src="/src/main.jsx"></script>

    <div id="veepn-guard-alert"></div>
    <style>
        @font-face {
            font-family: FigtreeVF;
            src: url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2 supports variations"), url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2-variations");
            font-weight: 100 1000;
            font-display: swap
        }
    </style>
    <div id="veepn-breach-alert"></div>
    <style>
        @font-face {
            font-family: FigtreeVF;
            src: url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2 supports variations"), url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2-variations");
            font-weight: 100 1000;
            font-display: swap
        }
    </style>
</body>

</html>