<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Preu del Producte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Formulari per editar el preu d'un producte -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900">Editar el Preu del Producte</h3>
                    <form action="{{ route('productes.update', $producte->id) }}" method="POST" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Nom del Producte -->
                        <div>
                            <label for="nom_producte" class="block text-sm font-medium text-gray-700">
                                Nom del Producte
                            </label>
                            <input type="text" id="nom_producte" name="nom_producte" value="{{ $producte->nom_producte }}" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" disabled>
                        </div>

                        <!-- Preu -->
                        <div>
                            <label for="preu" class="block text-sm font-medium text-gray-700">
                                Preu
                            </label>
                            <input type="number" id="preu" name="preu" value="{{ $producte->preu }}" step="0.01" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Actualitzar Preu
                            </button>
                            @if (session('status') === 'preu-updated')
                                <p class="text-sm text-green-600">Preu actualitzat correctament!</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Altres funcionalitats del perfil -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
