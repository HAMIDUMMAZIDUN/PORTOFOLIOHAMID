<section id="home" class="bg-gray-900 text-white min-h-screen flex items-center">
    <div class="container mx-auto px-8 md:px-12 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 items-center">
            
            <div class="lg:col-span-1 text-center md:text-left">
                <p class="text-primary-400 mb-2">— Hello There!</p>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4">I'm <span class="text-primary-500">HAMID</span></h1>
                <p class="text-lg text-gray-300 mb-6">Web Developer | Graphic Designer From Indonesia</p>
                
                <div class="bg-gray-800 p-4 rounded-lg mb-6 italic">
                    <i class="fas fa-quote-left text-primary-500 mr-2"></i>
                    HAMID’s Remarkable Design Transformed Our Website – Highly Recommended!
                </div>

                <div class="flex items-center justify-center md:justify-start mb-2">
                    <div class="flex -space-x-4">
                        <img class="w-12 h-12 border-2 border-gray-700 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="reviewer 1">
                        <img class="w-12 h-12 border-2 border-gray-700 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="reviewer 2">
                        <img class="w-12 h-12 border-2 border-gray-700 rounded-full" src="https://randomuser.me/api/portraits/women/65.jpg" alt="reviewer 3">
                    </div>
                    <div class="ml-4">
                        <span class="font-bold">150+ Reviews</span>
                        <span class="text-gray-400">(4.9 of 5)</span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm mb-8 text-center md:text-left">Reviews from Valued Clients</p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#services" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition text-center">Services &rarr;</a>
                    <a href="#contact" class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition text-center">Hire Me</a>
                </div>

                <div class="mt-8">
                    <p class="text-gray-500 mb-2">Follow Us On</p>
                    <div class="flex gap-4 justify-center md:justify-start">
                        <a href="https://www.instagram.com/hamidabdulaziz_/" class="text-2xl hover:text-primary-400"><i class="fab fa-instagram"></i></a>
                        <a href="https://id.pinterest.com/hamidabdulaziz36/" class="text-2xl hover:text-primary-400"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1 flex justify-center items-center relative order-first md:order-none">
                <div class="absolute w-64 h-64 md:w-80 md:h-80 bg-primary-800 rounded-full blur-2xl opacity-30"></div>
                <img src="{{ asset('images/HAMID.jpg') }}" alt="Foto Profil" class="relative w-60 h-60 md:w-72 md:h-72 rounded-full object-cover border-4 border-gray-700 shadow-lg">
            </div>
                <div class="lg:col-span-1 hidden lg:flex flex-col items-center space-y-8 w-full">

                <!-- GitHub Stats Section -->
                <div class="w-full">
                    <h2 class="text-center text-xl font-semibold text-gray-200 mb-4">
                        📊 My GitHub Stats 📊
                    </h2>
                    <div class="flex flex-col items-center gap-4">
                        <img src="https://github-readme-stats.vercel.app/api?username=HAMIDUMMAZIDUN&show_icons=true&theme=dracula&include_all_commits=true&count_private=true" alt="GitHub Stats" class="max-w-full h-auto rounded-lg shadow-md"/>
                        <img src="https://github-readme-stats.vercel.app/api/top-langs/?username=HAMIDUMMAZIDUN&layout=compact&langs_count=8&theme=dracula" alt="Top Languages" class="max-w-full h-auto rounded-lg shadow-md"/>
                    </div>
                </div>

                <!-- Contribution Graph Section -->
                <div class="w-full">
                    <h2 class="text-center text-xl font-semibold text-gray-200 mb-4">
                        Contribution Graph
                    </h2>
                    <div class="flex justify-center">
                        <img src="https://github-readme-activity-graph.vercel.app/graph?username=HAMIDUMMAZIDUN&theme=dracula" alt="Contribution Graph" class="max-w-full h-auto rounded-lg shadow-md"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>