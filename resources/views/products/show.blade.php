@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Prix : {{ $product->price }} €</p>
    <p>Stock : {{ $product->stock }}</p>
    <p>{{ $product->description }}</p>

    <form method="POST" action="{{ route('cart.add', $product) }}">
        @csrf
        <button type="submit">Ajouter au panier</button>
    </form>

    <a href="{{ route('products.index') }}">Retour aux produits</a>
@endsection