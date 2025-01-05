<x-app-layout>
    <!-- Slider d'Imatges -->
    <div id="slider" class="relative overflow-hidden w-full h-[500px]">
        <div class="flex transition-transform duration-1000 ease-linear" id="sliderWrapper">
            <img src="https://www.fcbarcelona.com/fcbarcelona/photo/2024/12/07/aa9cfe3c-72c1-40d0-87b3-4fef90fae77a/_MGA4648.jpg"
                alt="Slider 1" class="w-full h-[500px] object-cover flex-shrink-0">
            <img src="https://www.fcbarcelona.com/fcbarcelona/photo/2024/12/16/c9fbdd35-3254-402f-b96e-30d031d7c7e2/AC103248.jpg"
                alt="Slider 2" class="w-full h-[500px] object-cover flex-shrink-0">
            <img src="https://www.fcbarcelona.com/fcbarcelona/photo/2024/11/27/d652e072-a287-4c6a-8581-c7b9a4f0459a/_MGA4662.jpg"
                alt="Slider 3" class="w-full h-[500px] object-cover flex-shrink-0">
            <img src="https://www.fcbarcelona.com/fcbarcelona/photo/2024/11/22/2779f300-92ea-4920-a4d1-bc861b34741b/2024-08-12_ENTRENAMENTFCBHOQUEI_54.jpg"
                alt="Slider 4" class="w-full h-[500px] object-cover flex-shrink-0">
        </div>
        <!-- Text central del Slider -->
        <div class="absolute top-1/2 left-0 w-full text-center">
            <h1 class="text-white text-8xl font-bold drop-shadow-lg shadow-black"
                style="font-family: 'DM Sans', sans-serif; font-weight: bold; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
                HOQUEI MANIA
            </h1>
        </div>
    </div>

    <!-- Script per fer el Slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderWrapper = document.getElementById('sliderWrapper');
            const slides = sliderWrapper.querySelectorAll('img');
            let currentIndex = 0;

            setInterval(() => {
                currentIndex++;
                if (currentIndex >= slides.length) currentIndex = 0;
                sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
            }, 5000);
        });
    </script>

    <div class="relative overflow-hidden w-full mb-8 mt-10" style="margin-top: 3%;">
        <div class="flex items-center justify-center overflow-hidden">
            <div class="flex space-x-10 animate-marques">
                <img src="https://meneghinihockey.it/img/m/1.jpg" alt="Marca 1" class="h-24 w-auto">
                <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                    alt="Marca 2" class="h-16 w-auto">
                <img src="https://hockeyteam.es/img/m/41.jpg" alt="Marca 3" class="h-16 w-auto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                    alt="Marca 4" class="h-16 w-auto">

                <!-- Imatges duplicades per efecte infinit -->
                <img src="https://meneghinihockey.it/img/m/1.jpg" alt="Marca 1" class="h-24 w-auto">
                <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                    alt="Marca 2" class="h-16 w-auto">
                <img src="https://hockeyteam.es/img/m/41.jpg" alt="Marca 3" class="h-16 w-auto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                    alt="Marca 4" class="h-16 w-auto">
            </div>
        </div>
    </div>

    <!-- CSS per al Slider -->
    <style>
        .animate-marques {
            animation: slide 25s linear infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(120%);
            }

            100% {
                transform: translateX(-120%);
            }
        }
    </style>

    <!-- Secció DESTACAT -->
    <div class="container mx-auto px-4 py-12">
        <h2 class="custom-title mb-10">{{ __('DESTACAT') }}</h2>
        <div class="relative overflow-hidden">
            <div id="featuredWrapper" class="flex transition-transform duration-500 ease-in-out space-x-6">


                <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

                <!-- Primera Imatge -->
                <!-- Primera Imatge -->
                <a href="{{ route('materialPorter.index') }}"
                    class="relative block group rounded-lg overflow-hidden shadow-lg w-[250px] h-[400px] mx-2">
                    <img src="{{ asset('images/porterDestacats.jpg') }}" alt="{{ __('Petos Portero') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">
                        {{ __('PETOS PORTERO') }}
                    </div>
                </a>

                <!-- Segona Imatge -->
                <a href="{{ route('materialJugador.index') }}"
                    class="relative block group rounded-lg overflow-hidden shadow-lg w-[250px] h-[400px] mx-2">
                    <img src="{{ asset('images/platinesDestacats.jpg') }}" alt="{{ __('Patins') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">
                        {{ __('PLATINES PATINS') }}
                    </div>
                </a>

                <!-- Tercera Imatge -->
                <a href="{{ route('materialJugador.index') }}"
                    class="relative block group rounded-lg overflow-hidden shadow-lg w-[250px] h-[400px] mx-2">
                    <img src="{{ asset('images/rodesDestacats.jpg') }}" alt="{{ __('Rodes') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">
                        {{ __('RODES') }}
                    </div>
                </a>

                <!-- Quarta Imatge -->
                <a href="{{ route('materialJugador.index') }}"
                    class="relative block group rounded-lg overflow-hidden shadow-lg w-[250px] h-[400px] mx-2">
                    <img src="{{ asset('images/sticksDestacats.jpg') }}" alt="{{ __('Sticks Azemad') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">
                        {{ __('STICKS AZEMAD') }}
                    </div>
                </a>
            </div>



            <!-- Barra divisòria -->
            <div class="border-t border-gray-300 my-4" style="margin-top: 2%;"></div>

            <!-- Botons per moure els DESTACATS -->
            <div class="flex justify-center space-x-4 mt-4">
                <button id="featuredPrev"
                    class="w-14 h-14 bg-white text-gray-900 border border-gray-300 rounded-full flex items-center justify-center hover:bg-gray-900 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button id="featuredNext"
                    class="w-14 h-14 bg-whitetext-gray-900 border border-gray-300 rounded-full flex items-center justify-center hover:bg-white hover:text-gray-900 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const featuredWrapper = document.getElementById('featuredWrapper');
            const featuredItems = featuredWrapper.children;
            const featuredPrev = document.getElementById('featuredPrev');
            const featuredNext = document.getElementById('featuredNext');
            let featuredIndex = 0;

            function updateFeaturedSlider() {
                featuredWrapper.style.transform = `translateX(-${featuredIndex * (250 + 24)}px)`;
            }

            featuredNext.addEventListener('click', () => {
                if (featuredIndex < featuredItems.length - 1) { // Mostra 4 elements per vegada
                    featuredIndex++;
                    updateFeaturedSlider();
                }
            });

            featuredPrev.addEventListener('click', () => {
                if (featuredIndex > 0) featuredIndex--;
                updateFeaturedSlider();
            });
        });
    </script>




    <!-- Secció Google Maps -->
    <div class="bg-white py-12">
        <div class="container mx-auto px-4">
            <h2 class="custom-title mb-6">{{ __('On ens pots trobar?') }}</h2>
            <div class="flex justify-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.275546175962!2d2.2493397!3d41.9417692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a52749036ae301%3A0xfb558f058ea1c869!2sHockeymania!5e0!3m2!1sca!2ses!4v1700000000000!5m2!1sca!2ses"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

    <div class="flex justify-center mb-8">
        <img src="{{ asset('images/HoqueiManiaLogo.png') }}" alt="{{ __('Hoquei Mania Logo') }}"
            class="h-24 w-auto">
    </div>


    <style>
        .custom-title {
            font-size: 54px;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
            color: rgb(34, 34, 34);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
    </style>



    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16 relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-20 relative z-10">
            <div class="flex flex-wrap lg:flex-nowrap justify-between items-center">

                <!-- Primera Columna -->
                <div class="lg:w-1/2 mb-8 lg:mb-0 relative">
                    <div class="parallax-container">
                        <img src="https://patinkid.com/wp-content/uploads/2021/05/flyer-alameda.jpg"
                            alt="{{ __('Hoquei Image') }}" class="rounded-lg shadow-lg parallax-image">
                    </div>
                </div>

                <!-- Segona Columna -->
                <div class="lg:w-1/2 mb-8 lg:mb-0 flex flex-col justify-center">
                    <h2 class="text-2xl font-bold mb-4 leading-tight">
                        {{ __('Millora el teu rendiment') }} <br>
                        <span class="font-light">{{ __('amb el millor equipament d\'hoquei') }}</span>
                    </h2>
                </div>
            </div>

            <!-- Línia divisòria -->
            <div class="border-t border-gray-700 mt-8 pt-6">
                <div class="flex flex-wrap justify-between">
                    <!-- Xarxes Socials -->
                    <div class="mb-4 lg:mb-0">
                        <h3 class="font-semibold text-lg mb-4">{{ __('Les Nostres Reds Socials') }}</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white">
                                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png"
                                    alt="{{ __('Facebook') }}" class="h-6 w-6">
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png"
                                    alt="{{ __('Instagram') }}" class="h-6 w-6">
                            </a>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div>
                        <h3 class="font-semibold text-lg mb-4">{{ __('Vols rebre ofertes i futures promocions?') }}
                        </h3>
                        <form class="flex">
                            <input type="email"
                                class="bg-gray-800 text-gray-400 rounded-l-md p-2 w-full focus:outline-none"
                                placeholder="{{ __('Email address') }}">
                            <button class="bg-blue-600 text-white px-4 rounded-r-md hover:bg-blue-700">→</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Copy típic dels footers -->
            <div class="text-center text-gray-400 text-sm mt-8">
                <p>&copy; 2024 {{ __('HoqueiMania') }}. {{ __('Tots els drets reservats.') }}</p>
                <p>
                    <a href="#" class="hover:underline">{{ __('Política de Privacitat') }}</a> |
                    <a href="#" class="hover:underline">{{ __('Termes del Servei') }}</a>
                </p>
            </div>
        </div>

        <!-- Imatge Parallax -->
        <div class="absolute inset-0 bg-cover bg-center opacity-20 parallax-image z-0"></div>
    </footer>

    <style>
        .parallax-image {
            max-height: 300px;
            background-position: center;
            background-size: cover;
        }

        footer {
            background-color: #1f2937;
            color: white;
            padding: 4rem 1rem;
            margin-bottom: 2%;
        }

        footer h2,
        footer h3 {
            margin-bottom: 1rem;
        }

        footer .social-icons img {
            height: 1.5rem;
            width: 1.5rem;
            margin-right: 0.5rem;
        }

        footer form input {
            background-color: #374151;
            color: #9ca3af;
            border-radius: 0.375rem 0 0 0.375rem;
            padding: 0.5rem;
            flex: 1;
        }

        footer form button {
            background-color: #2563eb;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0 0.375rem 0.375rem 0;
            transition: background-color 0.3s;
        }

        footer form button:hover {
            background-color: #1d4ed8;
        }

        footer .border-t {
            border-top: 1px solid #374151;
        }
    </style>

    <!-- Slider de Marques -->
    <div class="relative overflow-hidden w-full mb-8">
        <div class="flex items-center justify-center overflow-hidden">
            <div class="flex space-x-10 animate-marques">
                <img src="https://meneghinihockey.it/img/m/1.jpg" alt="Marca 1" class="h-24 w-auto">
                <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                    alt="Marca 2" class="h-16 w-auto">
                <img src="https://hockeyteam.es/img/m/41.jpg" alt="Marca 3" class="h-16 w-auto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                    alt="Marca 4" class="h-16 w-auto">

                <!-- Imatges duplicades per efecte infinit -->
                <img src="https://meneghinihockey.it/img/m/1.jpg" alt="Marca 1" class="h-24 w-auto">
                <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                    alt="Marca 2" class="h-16 w-auto">
                <img src="https://hockeyteam.es/img/m/41.jpg" alt="Marca 3" class="h-16 w-auto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                    alt="Marca 4" class="h-16 w-auto">
            </div>
        </div>
    </div>

    <!-- CSS per al Slider -->
    <style>
        .animate-marques {
            animation: slide 25s linear infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(120%);
            }

            100% {
                transform: translateX(-120%);
            }
        }
    </style>
</x-app-layout>
