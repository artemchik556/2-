<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="header">
        <a href="{{ route('register') }}">Регистрация</a>
        <a href="{{ route('login') }}">Авторизация</a>
        <a href="{{ route('login') }}">Выход</a>
        <a href="{{ route('orders.my') }}">Мои заказы</a>
    </div>
</body>

</html>