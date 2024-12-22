<x-app-layout>
    <div class="container mt-5 p-6 bg-white shadow-lg rounded">
        <h2 class="text-2xl font-bold mb-4">Carrito de la Compra</h2>
        @if(empty(session('cistella')))
            <p class="text-gray-600">No hi ha cap comanda en procés encara...</p>
        @else
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">Imatge</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Nom del Producte</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Quantitat</th>
                        <th class="border border-gray-300 px-4 py-2 text-right">Preu</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach(session('cistella') as $id => $producte)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">
                            <img src="{{ $producte['imatge'] }}" alt="{{ $producte['nom'] }}" class="h-16 w-16 rounded">
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $producte['nom'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $producte['quantitat'] }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-right">{{ number_format($producte['preu'] * $producte['quantitat'], 2) }} €</td>
                        @php $total += $producte['preu'] * $producte['quantitat']; @endphp
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <form action="{{ route('comandes.eliminar', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">
                                    🗑️
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="font-bold bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2" colspan="4">Total</td>
                        <td class="border border-gray-300 px-4 py-2 text-right">{{ number_format($total, 2) }} €</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-6 flex justify-end">
                <form action="{{ route('comandes.finalitzar') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                        Finalitza la Compra
                    </button>
                </form>
            </div>
        @endif
    </div>
</x-app-layout>
