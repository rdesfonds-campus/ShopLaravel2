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
        <a href="{{ route('about') }}">À propos</a> |
        <a href="{{ route('contact') }}">Contact</a> |
        <a href="{{ route('products.index') }}">Produits</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>
    <footer>ShopLaravel &copy; 2025</footer>

</body>
</html>