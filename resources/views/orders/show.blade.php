@extends('layouts.app')

@section('content')
    <h1>Commande #{{ $order->id }}</h1>
    <p>Statut : {{ $order->status }}</p>
    <p>Date : {{ $order->created_at->format('d/m/Y H:i') }}</p>

    <h2>Articles</h2>
    @foreach($order->items as $item)
        <div>
            <p>
                {{ $item->product->name }} —
                {{ $item->unit_price }} € x {{ $item->quantity }}
                = {{ number_format($item->unit_price * $item->quantity, 2) }} €
            </p>
        </div>
    @endforeach

    <h3>Total : {{ $order->total }} €</h3>

    <a href="{{ route('orders.index') }}">Retour aux commandes</a>
@endsection