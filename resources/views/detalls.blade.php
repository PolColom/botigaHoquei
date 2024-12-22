<x-app-layout>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Imatge del producte -->
            <div class="flex justify-center">
                <img src="{{ $producte->image_url }}" alt="{{ $producte->nom_producte }}" class="rounded-lg shadow-md w-3/4 max-h-96">
            </div>

            <!-- Detalls del producte -->
            <div>
                <h1 class="text-3xl font-bold mb-4">{{ $producte->nom_producte }}</h1>
                <p class="text-gray-600 text-lg mb-4">{{ $producte->descripcio }}</p>
                <p class="text-xl font-bold text-gray-800 mb-2">Preu unitari: {{ number_format($producte->preu, 2) }} €</p>
                <p class="text-green-600 font-semibold mb-4">Stock disponible: {{ $producte->quantitat_stock }}</p>

                <!-- Selecció de quantitat -->
                <form action="{{ route('comanda.afegir', $producte->id) }}" method="POST" onsubmit="return validaQuantitat();">
                    @csrf
                    <label for="quantitat" class="block text-gray-700 font-medium mb-2">Quantitat:</label>
                    <input 
                        type="number" 
                        id="quantitat" 
                        name="quantitat" 
                        value="1" 
                        min="1" 
                        max="{{ $producte->quantitat_stock }}" 
                        class="border border-gray-300 rounded-lg p-2 mb-4 w-20"
                        onchange="actualitzaPreu();">

                    <p class="text-lg font-semibold text-gray-800 mb-4">Preu total: <span id="preu">{{ number_format($producte->preu, 2) }}</span> €</p>

                    <!-- Botó "Afegeix a la Cistella" -->
                    <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                        Afegeix a la Cistella
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function actualitzaPreu() {
            const preuUnitari = {{ $producte->preu }};
            const quantitat = document.getElementById('quantitat').value;
            const preuTotal = preuUnitari * quantitat;
            document.getElementById('preu').innerText = preuTotal.toFixed(2);
        }

        function validaQuantitat() {
            const quantitat = document.getElementById('quantitat').value;
            const stock = {{ $producte->quantitat_stock }};

            if (quantitat > stock) {
                alert('No tenim suficients articles en stock.');
                return false;
            }
            return true;
        }
    </script>
</x-app-layout>
