<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Products</h1>
    <div class="col">
    @foreach ($products as $product)
    <div class="product-card">
        <h2>{{ $product->название }}</h2>
        <p>Стоимость: {{ number_format($product->стоимость, 0, ',', ' ') }} руб.</p>
        <p>Количество: {{ $product->количество }}</p>
    </div>
@endforeach

    </div>
</body>
</html>
