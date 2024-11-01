@extends('layouts.header')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<h1>Мои заказы</h1>

@foreach ($orders as $order)
    <div class="order-card">
        <p>Товар: {{ $order->product_id }}</p>
        <p>Количество: {{ $order->quantity }}</p>
        <p>Сумма: {{ number_format($order->total, 0, ',', ' ') }} руб.</p>
    </div>
@endforeach
