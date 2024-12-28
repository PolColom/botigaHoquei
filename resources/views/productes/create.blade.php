<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Afegir Producte') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-6 py-12">
        <form action="{{ route('productes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6">
                <div>
                    <label for="nom_producte" class="block text-sm font-medium text-gray-700">Nom del Producte</label>
                    <input type="text" id="nom_producte" name="nom_producte" class="w-full border-gray-300 rounded" required>
                </div>
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700">Imatge del Producte</label>
                    <input type="file" id="image_url" name="image_url" class="w-full border-gray-300 rounded">
                </div>
                <div>
                    <label for="quantitat_stock" class="block text-sm font-medium text-gray-700">Quantitat en Stock</label>
                    <input type="number" id="quantitat_stock" name="quantitat_stock" class="w-[10%] border-gray-300 rounded" required>
                </div>
                <div>
                    <label for="tipus_producte_id" class="block text-sm font-medium text-gray-700">Tipus de Producte</label>
                    <select id="tipus_producte_id" name="tipus_producte_id" class="w-[10%] border-gray-300 rounded" required>
                        <option value="1">Porter</option>
                        <option value="2">Jugador</option>
                    </select>
                </div>
                <div>
                    <label for="preu" class="block text-sm font-medium text-gray-700">Preu</label>
                    <input type="number" id="preu" name="preu" step="0.01" class="w-full border-gray-300 rounded" required>
                </div>
                <div>
                    <label for="descripcio" class="block text-sm font-medium text-gray-700">Descripció</label>
                    <textarea id="descripcio" name="descripcio" rows="4" class="w-full border-gray-300 rounded"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Afegir Producte
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
