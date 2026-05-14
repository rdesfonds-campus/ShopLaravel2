@extends('layouts.app')

@section('content')
    <h1>Mes commandes</h1>

    @forelse($orders as $order)
        <div>
            <p>
                Commande #{{ $order->id }} —
                {{ $order->total }} € —
                Statut : {{ $order->status }} —
                {{ $order->created_at->format('d/m/Y') }}
                | <a href="{{ route('orders.show', $order) }}">Voir le détail</a>
            </p>
        </div>
    @empty
        <p>Vous n'avez pas encore de commande.</p>
    @endforelse
@endsection