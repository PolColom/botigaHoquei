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
                            <div class="flex items-center space-x-2">
                                <input type="text" id="nom_producte" name="nom_producte"
                                    class="w-full px-3 py-2 border rounded" value="{{ $producte->nom_producte }}">
                                <button class="bg-gray-300 p-2 rounded" title="Editar">
                                    🖉
                                </button>
                            </div>
                        </div>

                        <!-- Preu -->
                        <div class="mb-4">
                            <label for="preu" class="block text-gray-700 font-bold mb-2">Preu:</label>
                            <div class="flex items-center space-x-2">
                                <input type="number" id="preu" name="preu" step="0.01"
                                    class="w-full px-3 py-2 border rounded" value="{{ $producte->preu }}">
                                <button class="bg-gray-300 p-2 rounded" title="Editar">
                                    🖉
                                </button>
                            </div>
                        </div>

                        <!-- Quantitat en estoc -->
                        <div class="mb-4">
                            <label for="quantitat_stock" class="block text-gray-700 font-bold mb-2">Quantitat en
                                Estoc:</label>
                            <div class="flex items-center space-x-2">
                                <input type="number" id="quantitat_stock" name="quantitat_stock"
                                    class="w-full px-3 py-2 border rounded" value="{{ $producte->quantitat_stock }}">
                                <button class="bg-gray-300 p-2 rounded" title="Editar">
                                    🖉
                                </button>
                            </div>
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
