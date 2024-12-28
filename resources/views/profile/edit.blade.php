<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Editar Producte</h3>
                    <form action="{{ route('productes.update', $producte->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nom -->
                        <div class="mb-4">
                            <label for="nom_producte" class="block text-gray-700 font-bold mb-2">Nom del Producte:</label>
                            <input type="text" id="nom_producte" name="nom_producte" value="{{ $producte->nom_producte }}" class="w-full px-3 py-2 border rounded">
                        </div>

                        <!-- Preu -->
                        <div class="mb-4">
                            <label for="preu" class="block text-gray-700 font-bold mb-2">Preu:</label>
                            <input type="number" id="preu" name="preu" step="0.01" value="{{ $producte->preu }}" class="w-full px-3 py-2 border rounded">
                        </div>

                        <!-- Quantitat en estoc -->
                        <div class="mb-4">
                            <label for="quantitat_stock" class="block text-gray-700 font-bold mb-2">Quantitat en Estoc:</label>
                            <input type="number" id="quantitat_stock" name="quantitat_stock" value="{{ $producte->quantitat_stock }}" class="w-[10%] px-3 py-2 border rounded">
                        </div>

                        <!-- Tipus de Producte -->
                        <div class="mb-4">
                            <label for="tipus_producte" class="block text-gray-700 font-bold mb-2">Tipus de Producte:</label>
                            <select id="tipus_producte" name="tipus_producte" class="w-[10%] px-3 py-2 border rounded">
                                <option value="Porter" {{ $producte->tipus_producte === 'Porter' ? 'selected' : '' }}>Porter</option>
                                <option value="Jugador" {{ $producte->tipus_producte === 'Jugador' ? 'selected' : '' }}>Jugador</option>
                            </select>
                        </div>

                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Guardar Canvis
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
