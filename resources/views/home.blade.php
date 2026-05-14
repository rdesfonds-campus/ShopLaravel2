@extends('layouts.app')

@section('content')
    <h1>Bienvenue sur ShopLaravel</h1>
    <p>Notre catalogue de produits vous attend.</p>
    <a href="{{ route('products.index') }}">Voir les produits</a>
@endsection