<!DOCTYPE html>
<html>
<head>
    <title>Produit - {{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Prix : ${{ $product->price }}</p>
</body>
</html>
