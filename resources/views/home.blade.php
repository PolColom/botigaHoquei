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
            <img src="https://www.fcbarcelona.com/fcbarcelona/photo/2024/12/04/98323158-ffef-4cd1-b903-946fb7603bf4/_MGA4502.jpg"
                alt="Slider 5" class="w-full h-[500px] object-cover flex-shrink-0">
            <img src="https://www.fcbarcelona.com/fcbarcelona/photo/2024/11/20/197655d5-f0fa-4535-bddf-5e33852f5381/2024-11-20_FCBHOQUEIvsSAINTOMER_54.JPG"
                alt="Slider 6" class="w-full h-[500px] object-cover flex-shrink-0">
            <img src="https://www.fcbarcelona.com/photo-resources/2024/12/09/4b956ff2-2055-4659-8fd4-e5f114e6908d/2024-12-09_FCBHOQUEIvsNOIA_26.JPG?width=1200&height=750"
                alt="Slider 7" class="w-full h-[500px] object-cover flex-shrink-0">
            <img src="https://www.fcbarcelona.com/photo-resources/2024/12/09/5be76990-066f-405f-952d-4888f6791d26/2024-12-09_FCBHOQUEIvsNOIA_28.JPG?width=1200&height=750"
                alt="Slider 8" class="w-full h-[500px] object-cover flex-shrink-0">
            <img src="https://www.fcbarcelona.com/fcbarcelona/photo/2024/11/28/adf04788-9f8a-4a03-93ed-052a9b6ecafc/AC307222.jpg"
                alt="Slider 9" class="w-full h-[500px] object-cover flex-shrink-0">


        </div>
        <!-- Text central del Slider -->
        <div class="absolute top-1/2 left-0 w-full text-center">
            <h1 class="text-white text-8xl font-bold drop-shadow-1g">HOQUEI MANIA</h1>
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
            }, 5000); //5s
        });
    </script>

    <!-- Slider de Marques -->
    <div class="logo-carousel py-10">
        <div class="logo-component">
            <div class="logo-list">
                <!-- Imatges de les marques -->
                <div class="logo-wrapper">
                    <img src="https://meneghinihockey.it/img/m/1.jpg" style="width: 280px; height: auto;" loading="lazy"
                        alt="Marca 1" class="logo-logo">
                </div>
                <div class="logo-wrapper">
                    <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                        style="width: 250px; height: auto;" loading="lazy" alt="Marca 2" class="logo-logo">
                </div>
                <div class="logo-wrapper">
                    <img src="https://hockeyteam.es/img/m/41.jpg" style="width: 120px; height: auto;" loading="lazy"
                        alt="Marca 3" class="logo-logo">
                </div>
                <div class="logo-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                        style="width: 120px; height: auto;" loading="lazy" alt="Marca 4" class="logo-logo">
                </div>

                <!-- Imatges duplicades per l'efecte infinit -->
                <div class="logo-wrapper">
                    <img src="https://meneghinihockey.it/img/m/1.jpg" style="width: 280px; height: auto;" loading="lazy"
                        alt="Marca 1" class="logo-logo">
                </div>
                <div class="logo-wrapper">
                    <img src="https://lh6.googleusercontent.com/proxy/WptjH4aK0F_B5X_6D7pfDZmZ6UR_1SNCTcHBfnRrV8I5--SCGgYpj8CkwjsQPzRsnVc3mM8kwiFzdFH1H1tgENYlciE--G-BXL6fLig"
                        style="width: 250px; height: auto;" loading="lazy" alt="Marca 2" class="logo-logo">
                </div>
                <div class="logo-wrapper">
                    <img src="https://hockeyteam.es/img/m/41.jpg" style="width: 120px; height: auto;" loading="lazy"
                        alt="Marca 3" class="logo-logo">
                </div>
                <div class="logo-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqBcvtD1oA6ZHHRHi7ZdJXh7CP9SDE9236Ow&s"
                        style="width: 120px; height: auto;" loading="lazy" alt="Marca 4" class="logo-logo">
                </div>
            </div>
        </div>
    </div>

    <!-- CSS per a l'efecte del slider -->
    <style>
        .logo-carousel {
            overflow: hidden;
            width: 100%;
            position: relative;
            margin-top: 20px;
        }

        .logo-component {
            display: flex;
            align-items: center;
            height: 100%;
        }

        .logo-list {
            display: flex;
            align-items: center;
            margin-left: 200px;
            /* Comença més a la dreta */
            animation: scroll 40s linear infinite;
            /* Animació contínua */
        }

        .logo-wrapper {
            margin-right: 100px;
            /* Espai més gran entre imatges */
        }

        .logo-logo {
            max-width: 200px;
            height: auto;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>



    <div class="container mx-auto px-4 py-12">
        <h2 class="text-4xl font-bold text-center mb-10">DESTACAT</h2>
        <!-- Primera Fila -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-8">
            <!-- Article 1 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/147-large_default/stick-azemad-special.jpg"
                    alt="Stick Azemad Special" class="mx-auto h-58 w-full object-cover">
                <h3 class="mt-4 font-semibold text-lg">Stick Azemad Special</h3>
                <p class="text-gray-600 font-bold">76,00 €</p>
            </div>
            <!-- Article 2 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/144-large_default/stick-azemad-super.jpg" alt="Stick Azemad Super"
                    class="mx-auto h-58 w-full object-cover">
                <h3 class="mt-4 font-semibold text-lg">Stick Azemad Super</h3>
                <p class="text-gray-600 font-bold">73,00 €</p>
            </div>
            <!-- Article 3 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/186-large_default/stick-azemad-rv66.jpg" alt="Stick Azemad RV66"
                    class="mx-auto h-58 w-full object-cover">
                <h3 class="mt-4 font-semibold text-lg">Stick Azemad RV66</h3>
                <p class="text-gray-600 font-bold">78,00 €</p>
            </div>
            <!-- Article 4 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/183-large_default/stick-azemad-ferran-font.jpg"
                    alt="Stick Azemad Ferran Font" class="mx-auto h-58 w-full object-cover">
                <h3 class="mt-4 font-semibold text-lg">Stick Azemad Ferran Font</h3>
                <p class="text-gray-600 font-bold">76,00 €</p>
            </div>
        </div>

        <!-- Segona Fila -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Article 5 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/216-large_default/stick-reno-special-world-champion-tapon-rojo.jpg"
                    alt="Stick Reno World Champion Tapón Rojo"
                    class="mx-auto h-58 w-full object-cover transform scale-x-[-1]">
                <h3 class="mt-4 font-semibold text-lg">Stick Reno World Champion Tapón Rojo</h3>
                <p class="text-gray-600 font-bold">Preu no especificat</p>
            </div>
            <!-- Article 6 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/190-large_default/stick-reno-internacional-classico-negro.jpg"
                    alt="Stick Reno Internacional Classico Negro"
                    class="mx-auto h-58 w-full object-cover transform scale-x-[-1]">
                <h3 class="mt-4 font-semibold text-lg">Stick Reno Internacional Classico Negro</h3>
                <p class="text-gray-600 font-bold">Preu no especificat</p>
            </div>
            <!-- Article 7 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/218-large_default/stick-reno-world-champion-tapon-azul.jpg"
                    alt="Stick Reno World Champion Tapón Azul" class="mx-auto h-58 w-full object-cover">
                <h3 class="mt-4 font-semibold text-lg">Stick Reno World Champion Tapón Azul</h3>
                <p class="text-gray-600 font-bold">Preu no especificat</p>
            </div>
            <!-- Article 8 -->
            <div class="text-center">
                <img src="https://www.hockeymania.es/214-large_default/stick-reno-special-pedro-gil.jpg"
                    alt="Stick Reno Special Pedro Gil"
                    class="mx-auto h-58 w-full object-cover transform scale-x-[-1]">
                <h3 class="mt-4 font-semibold text-lg">Stick Reno Special Pedro Gil</h3>
                <p class="text-gray-600 font-bold">Preu no especificat</p>
            </div>
        </div>
    </div>

</x-app-layout>
