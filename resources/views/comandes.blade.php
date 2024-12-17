<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comandes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Aquí trobaràs totes les comandes realitzades.") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Carrito de la Compra</h2>
    @if($comandes->isEmpty())
        <p>No hi ha cap comanda en procés encara...</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nom del Producte</th>
                    <th>Tipus</th>
                    <th>Quantitat</th>
                    <th>Preu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comandes as $comanda)
                <tr>
                    <td>{{ $comanda->nom }}</td>
                    <td>{{ $comanda->producte->tipus_producte->nom }}</td>
                    <td>{{ $comanda->producte->quantitat_stock }}</td>
                    <td>{{ $comanda->producte->tipus_producte->preu }} €</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
