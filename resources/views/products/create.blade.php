@extends('layouts.app')

@section('content')
    <h1>Créer un produit</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div>
            <label>Nom</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old('slug') }}">
        </div>

        <div>
            <label>Prix</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        </div>

        <div>
            <label>Stock</label>
            <input type="number" name="stock" value="{{ old('stock') }}">
        </div>

        <div>
            <label>Catégorie</label>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Actif</label>
            <input type="checkbox" name="active" value="1" checked>
        </div>

        <button type="submit">Créer</button>
    </form>
@endsection