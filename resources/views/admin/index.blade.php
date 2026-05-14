@extends('layouts.app')

@section('content')
    <h1>Espace Administration</h1>
    <p>Bienvenue {{ auth()->user()->name }} — espace réservé aux administrateurs.</p>

    <ul>
        <li><a href="{{ route('products.index') }}">Gérer les produits</a></li>
        <li><a href="{{ route('categories.index') }}">Gérer les catégories</a></li>
    </ul>
@endsection