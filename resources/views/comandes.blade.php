<x-app-layout>
    <div class="container mt-5 p-6 bg-white shadow-lg rounded">
        <h2 class="text-2xl font-bold mb-4">Carrito de la Compra</h2>

        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

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
                    @php
                        $descompte = session('descompte', 0);
                        $totalAmbDescompte = $total - ($total * $descompte);
                    @endphp
                    <tr class="font-bold bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2" colspan="4">Total Sense Descompte</td>
                        <td class="border border-gray-300 px-4 py-2 text-right">{{ number_format($total, 2) }} €</td>
                    </tr>
                    <tr class="font-bold bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2" colspan="4">Total Amb Descompte</td>
                        <td class="border border-gray-300 px-4 py-2 text-right">{{ number_format($totalAmbDescompte, 2) }} €</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex flex-col">
                <!-- Codi de promoció -->
                <form action="{{ route('comandes.descompte') }}" method="POST" class="flex items-center space-x-4">
                    @csrf
                    <input type="text" name="codi" placeholder="A Quin Equip Jugues?" class="w-full p-2 border border-gray-300 rounded">
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                        Aplicar Descompte
                    </button>
                </form>
                <div class="mt-6 flex justify-end">
                    <form action="{{ route('comandes.finalitzar') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Finalitza la Compra
                        </button>
                    </form>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
