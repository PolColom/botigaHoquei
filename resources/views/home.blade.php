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
            <h1 class="text-white text-8xl font-bold drop-shadow-lg shadow-black" style="font-family: 'DM Sans', sans-serif; font-weight: bold; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
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

    
    <div class="logo-carousel py-10">
        <div class="logo-component">
            <div class="logo-list">
                <div class="logo-wrapper">
                    <img src="https://meneghinihockey.it/img/m/1.jpg" style="width: 280px;" loading="lazy"
                        alt="Marca 1">
                </div>
                <div class="logo-wrapper">
                    <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                        style="width: 250px;" loading="lazy" alt="Marca 2">
                </div>
                <div class="logo-wrapper">
                    <img src="https://hockeyteam.es/img/m/41.jpg" style="width: 120px;" loading="lazy" alt="Marca 3">
                </div>
                <div class="logo-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                        style="width: 120px;" loading="lazy" alt="Marca 4">
                </div>

                <!-- Marques Duplicades -->
                <div class="logo-wrapper">
                    <img src="https://meneghinihockey.it/img/m/1.jpg" style="width: 280px;" loading="lazy"
                        alt="Marca 1">
                </div>
                <div class="logo-wrapper">
                    <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                        style="width: 250px;" loading="lazy" alt="Marca 2">
                </div>
                <div class="logo-wrapper">
                    <img src="https://hockeyteam.es/img/m/41.jpg" style="width: 120px;" loading="lazy" alt="Marca 3">
                </div>
                <div class="logo-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                        style="width: 120px;" loading="lazy" alt="Marca 4">
                </div>
            </div>
        </div>
    </div>

    <!-- CSS per a l'efecte del slider -->
    <style>
        .logo-carousel {
            overflow: hidden;
            width: 100%;
        }

        .logo-list {
            display: flex;
            animation: scroll 40s linear infinite;
        }

        .logo-wrapper {
            margin-right: 100px;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>

    <!-- Secció DESTACAT -->
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-4xl font-bold text-center mb-10">DESTACAT</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
            <a href="{{ route('materialPorter.index') }}" class="relative block group">
                <img src="{{ asset('images/porterDestacats.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">PETOS
                    PORTERO</div>
            </a>
            <a href="#" class="relative block group">
                <img src="{{ asset('images/platinesDestacats.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">
                    PATINS</div>
            </a>
            <a href="#" class="relative block group">
                <img src="{{ asset('images/rodesDestacats.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">RODES
                    TOOR</div>
            </a>
            <a href="{{ route('materialJugador.index') }}" class="relative block group">
                <img src="{{ asset('images/sticksDestacats.jpg') }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4 text-white font-extrabold">STICKS
                    AZEMAD</div>
            </a>
        </div>
    </div>




    <!-- Footer -->
    <footer class="bg-white py-12">
        <!-- Logo Central -->
        <div class="flex justify-center mb-8">
            <img src="{{ asset('images/HoqueiManiaLogo.png') }}" alt="Hoquei Mania Logo" class="h-24 w-auto">
        </div>

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

        <!-- Secció Xarxes Socials i Text -->
        <div class="border-t border-gray-300 pt-8">
            <div class="flex justify-center space-x-6 mb-4">
                <!-- Icons Xarxes -->
                <a href="#" class="text-gray-500 hover:text-gray-700">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733646.png" alt="YouTube"
                        class="h-8 w-auto">
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn"
                        class="h-8 w-auto">
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"
                        class="h-8 w-auto">
                </a>
            </div>

            <!-- Text Legal -->
            <div class="text-center text-gray-500 text-sm mb-4">
                <p>C/ Sabadell, 9B
                    Pol. Ind, Carrer Sot dels Pradals</p>
                <p>08500 Vic Barcelona</p>
            </div>

            <!-- Copyright -->
            <div class="text-center text-gray-500 text-sm">
                <p>&copy; 2024 HoqueiMania. Tots els drets reservats.</p>
                <p>
                    <a href="#" class="hover:underline">Política de Privacitat</a> |
                    <a href="#" class="hover:underline">Termes del Servei</a>
                </p>
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
    </footer>
</x-app-layout>
