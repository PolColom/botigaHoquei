<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Material Jugadors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Aquí trobaràs el material per a jugadors.") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center mb-6">Material Jugadors</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($productes as $producte)
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                    <img src="{{ asset('images/' . $producte->id . '.jpg') }}" alt="{{ $producte->nom_producte }}"
                        class="h-48 w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">{{ $producte->nom_producte }}</h3>
                        <p class="text-gray-600 font-medium">{{ $producte->tipusProducte->preu }} €</p>
                        <form action="{{ route('cistella.afegir', $producte->id) }}" method="POST">
                            @csrf
                            <button type="submit" 
                                    class="mt-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                                Afegir a la Cistella
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
