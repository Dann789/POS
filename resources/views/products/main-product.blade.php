<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama Produk</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Utama Produk</h1>
    <p>Berikut kategori produk yang tersedia:</p>
    <ul>
        <li><a href="{{ route('products.category.food-beverage') }}">Food Beverage</a></li>
        <li><a href="{{ route('products.category.beauty-health') }}">Beauty Health</a></li>
        <li><a href="{{ route('products.category.home-care') }}">Home Care</a></li>
        <li><a href="{{ route('products.category.baby-kid') }}">Baby Kid</a></li>
    </ul>
</body>
</html>