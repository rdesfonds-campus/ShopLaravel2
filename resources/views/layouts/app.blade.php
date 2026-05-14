<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopLaravel</title>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Accueil</a> |
        <a href="{{ route('products.index') }}">Produits</a> |
        <a href="{{ route('categories.index') }}">Catégories</a> |

        @auth
            <a href="{{ route('cart.index') }}">
                Panier ({{ count(session()->get('cart', [])) }})
            </a> |
            <a href="{{ route('orders.index') }}">Mes commandes</a> |
            <span>{{ auth()->user()->name }}</span> |
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        @else
            <a href="{{ route('login') }}">Connexion</a> |
            <a href="{{ route('register') }}">Inscription</a>
        @endauth
    </nav>

    <hr>

    <main>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>

    <hr>
    <footer>ShopLaravel &copy; 2025</footer>

</body>
</html>