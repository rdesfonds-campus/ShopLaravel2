@extends('layouts.app')

@section('content')
    <h1>Modifier {{ $product->name }}</h1>

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Nom</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
        </div>

        <div>
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $product->slug) }}">
        </div>

        <div>
            <label>Prix</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
        </div>

        <div>
            <label>Stock</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">
        </div>

        <div>
            <label>Catégorie</label>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Actif</label>
            <input type="checkbox" name="active" value="1" {{ $product->active ? 'checked' : '' }}>
        </div>

        <button type="submit">Modifier</button>
    </form>
@endsection