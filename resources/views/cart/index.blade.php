@extends('layouts.app')

@section('content')
<h1>Mon panier</h1>

@forelse($cart as $id => $item)
<div>
    <p>
        {{ $item['name'] }} — {{ $item['price'] }} € x {{ $item['quantity'] }}
        = {{ number_format($item['price'] * $item['quantity'], 2) }} €
    </p>
    <form method="POST" action="{{ route('cart.update', $id) }}" style="display:inline">
        @csrf
        @method('PATCH')
        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width:50px">
        <button type="submit">Mettre à jour</button>
    </form>
    <form method="POST" action="{{ route('cart.remove', $id) }}" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Retirer</button>
    </form>
</div>
<hr>
@empty
<p>Votre panier est vide.</p>
@endforelse

@if(count($cart) > 0)
<h3>Total : {{ number_format($total, 2) }} €</h3>
<form method="POST" action="{{ route('cart.clear') }}">
    @csrf
    @method('DELETE')
    <button type="submit">Vider le panier</button>
</form>
@endif
@if(count($cart) > 0)
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <button type="submit">Passer commande</button>
</form>
@endif
<a href="{{ route('products.index') }}">Continuer mes achats</a>
@endsection