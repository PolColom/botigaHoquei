<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producte') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-6 py-12">
        <form action="{{ route('productes.update', $producte->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid gap-6">
                <!-- Nom del producte -->
                <div>
                    <label for="nom_producte" class="block text-sm font-medium text-gray-700">Nom del Producte</label>
                    <input type="text" id="nom_producte" name="nom_producte" value="{{ $producte->nom_producte }}" class="w-full border-gray-300 rounded" required>
                </div>

                <!-- Imatge -->
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700">Imatge del Producte</label>
                    <input type="file" id="image_url" name="image_url" class="w-full border-gray-300 rounded">
                </div>

                <!-- Quantitat en stock -->
                <div>
                    <label for="quantitat_stock" class="block text-sm font-medium text-gray-700">Quantitat en Stock</label>
                    <input type="number" id="quantitat_stock" name="quantitat_stock" value="{{ $producte->quantitat_stock }}" class="w-[10%] border-gray-300 rounded" required>
                </div>

                <!-- Tipus de producte -->
                <div>
                    <label for="tipus_producte_id" class="block text-sm font-medium text-gray-700">Tipus de Producte</label>
                    <select id="tipus_producte_id" name="tipus_producte_id" class="w-[10%] border-gray-300 rounded" required>
                        <option value="1" {{ $producte->tipus_producte_id == 1 ? 'selected' : '' }}>Porter</option>
                        <option value="2" {{ $producte->tipus_producte_id == 2 ? 'selected' : '' }}>Jugador</option>
                    </select>
                </div>

                <!-- Preu -->
                <div>
                    <label for="preu" class="block text-sm font-medium text-gray-700">Preu</label>
                    <input type="number" id="preu" name="preu" step="0.01" value="{{ $producte->preu }}" class="w-full border-gray-300 rounded" required>
                </div>

                <!-- Descripció -->
                <div>
                    <label for="descripcio" class="block text-sm font-medium text-gray-700">Descripció</label>
                    <textarea id="descripcio" name="descripcio" rows="4" class="w-full border-gray-300 rounded">{{ $producte->descripcio }}</textarea>
                </div>

                <!-- Botó de guardar -->
                <div class="text-right">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Guardar Canvis
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
