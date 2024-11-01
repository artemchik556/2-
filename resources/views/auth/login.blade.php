@extends('layouts.header')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<form class="register" action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Войти</button>
</form>
