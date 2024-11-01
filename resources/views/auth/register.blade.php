@extends('layouts.header')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<form class="register" action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <label for="name">Имя</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Подтвердите пароль</label>
        <input type="password" name="password_confirmation" required>
    </div>
    <button type="submit">Зарегистрироваться</button>
</form>
