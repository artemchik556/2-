<div class="product-card">
    <h2>{{ $product['название'] }}</h2>
    <p>Стоимость: {{ number_format($product['стоимость'], 0, ',', ' ') }} руб.</p>
    <p>Количество: {{ $product['количество'] }}</p>
</div>
