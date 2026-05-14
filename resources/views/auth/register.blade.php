@extends('layouts.app')

@section('content')
    <h1>Créer un compte</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label>Nom</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Mot de passe</label>
            <input type="password" name="password">
            @error('password') <span style="color:red">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit">S'inscrire</button>
        <a href="{{ route('login') }}">Déjà un compte ?</a>
    </form>
@endsection