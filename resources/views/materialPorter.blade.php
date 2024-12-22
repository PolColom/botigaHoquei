<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Material Porters') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center mb-6">Material Porters</h2>

        <!-- Botó per afegir producte (només visible per admin) -->
        @if (Auth::user() && Auth::user()->role === 'admin')
            <div class="text-right mb-4">
                <a href="{{ route('productes.create') }}"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Afegir Producte
                </a>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($productes as $producte)
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                    <a href="{{ route('detalls', $producte->id) }}">
                        <img src="{{ $producte->image_url }}" alt="{{ $producte->nom_producte }}"
                            class="h-58 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">{{ $producte->nom_producte }}</h3>
                            <p class="text-gray-600 font-medium">{{ number_format($producte->preu, 2) }} €</p>
                        </div>
                    </a>

                    <!-- Botons només visibles per a l'admin -->
                    @if (Auth::user() && Auth::user()->role === 'admin')
                        <div class="mt-4 flex justify-center space-x-4">
                            <!-- Botó d'eliminar -->
                            <form action="{{ route('productes.destroy', $producte->id) }}" method="POST"
                                class="mb-2" onsubmit="return confirm('Estàs segur que vols eliminar aquest producte?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Eliminar
                                </button>
                            </form>

                            <!-- Botó d'editar preu -->
                            <a href="{{ route('productes.edit', $producte->id) }}"
                                class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 mb-2">
                                Editar Preu
                            </a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
