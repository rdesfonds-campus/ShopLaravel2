@extends('layouts.app')

@section('content')
    <h1>Nos produits</h1>
    <a href="{{ route('products.create') }}">+ Créer un produit</a>

    @forelse($products as $product)
        <div>
            <p>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                — {{ $product->price }} €
                | <a href="{{ route('products.edit', $product) }}">Modifier</a>
                |
                <form method="POST" action="{{ route('products.destroy', $product) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Supprimer ?')">Supprimer</button>
                </form>
            </p>
        </div>
    @empty
        <p>Aucun produit disponible.</p>
    @endforelse
@endsection