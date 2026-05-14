@extends('layouts.app')

@section('content')
    <h1>Nos produits</h1>

    @forelse($products as $product)
        <p>{{ $product['name'] }} — {{ $product['price'] }} €</p>
    @empty
        <p>Aucun produit disponible.</p>
    @endforelse
@endsection