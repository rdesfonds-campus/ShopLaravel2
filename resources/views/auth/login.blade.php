@extends('layouts.app')

@section('content')
    <h1>Connexion</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

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
            <label>
                <input type="checkbox" name="remember"> Se souvenir de moi
            </label>
        </div>

        <button type="submit">Se connecter</button>
        <a href="{{ route('register') }}">Pas encore de compte ?</a>
    </form>
@endsection