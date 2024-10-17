<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->название }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="forms">
        <h1>{{ $product->название }}</h1>
        <p>Стоимость: {{ number_format($product->стоимость, 0, ',', ' ') }} руб.</p>
        <p>Количество на складе: {{ $product->количество }}</>

        <!-- Форма для заказа -->
        <form action="{{ route('order.store', $product->id) }}" method="POST">
            @csrf
            <label style="font-weight: 600;" for="quantity">Количество:</label>
            <input class="things" type="number" name="quantity" id="quantity" min="1" max="{{ $product->количество }}" required>
            <button class="click" type="submit">Заказать</button>
        </form>
    </div>
</body>
</html>
