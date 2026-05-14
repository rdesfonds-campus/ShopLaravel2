@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <h2>Produits de cette catégorie</h2>

    @forelse($products as $product)
        <div>
            <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
            — {{ $product->price }} €
            | Stock : {{ $product->stock }}
        </div>
    @empty
        <p>Aucun produit dans cette catégorie.</p>
    @endforelse

    <a href="{{ route('categories.index') }}">Retour aux catégories</a>
@endsection