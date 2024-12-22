<x-app-layout>
    <div class="container mt-5 p-6 bg-white shadow-lg rounded">
        <h2 class="text-2xl font-bold mb-4">Gestió de Productes</h2>

        <a href="{{ route('admin.productes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mb-4 inline-block">
            Afegir Producte
        </a>

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nom</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Stock</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Preu</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productes as $producte)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $producte->nom_producte }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $producte->quantitat_stock }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ number_format($producte->preu, 2) }} €</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <a href="{{ route('admin.productes.edit', $producte->id) }}" class="text-blue-600 hover:text-blue-800">Editar</a>
                            <form action="{{ route('admin.productes.destroy', $producte->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
