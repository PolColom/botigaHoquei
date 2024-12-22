<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Material Jugadors') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center mb-6">Material Jugadors</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($productes as $producte)
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                    <a href="{{ route('detalls', $producte->id) }}">
                        <img src="{{ $producte->image_url }}" alt="{{ $producte->nom_producte }}" class="h-58 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">{{ $producte->nom_producte }}</h3>
                            <p class="text-gray-600 font-medium">{{ number_format($producte->preu, 2) }} €</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
