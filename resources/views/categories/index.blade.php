@extends('layouts.app')

@section('content')
    <h1>Nos catégories</h1>

    @forelse($categories as $category)
        <div>
            <a href="{{ route('categories.show', $category) }}">
                {{ $category->name }}
            </a>
            <span>({{ $category->products->count() }} produits)</span>
        </div>
    @empty
        <p>Aucune catégorie disponible.</p>
    @endforelse
@endsection