@extends('layouts.app')

@section('content')
    <h1>Créer un produit</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div>
            <label>Nom</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old('slug') }}">
            @error('slug') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Prix</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}">
            @error('price') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Stock</label>
            <input type="number" name="stock" value="{{ old('stock') }}">
            @error('stock') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Catégorie</label>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Actif</label>
            <input type="checkbox" name="active" value="1" checked>
        </div>

        <button type="submit">Créer</button>
    </form>
@endsection