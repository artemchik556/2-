@extends('layouts.header')

@section('content')
    <h1>Выход из профиля</h1>
    <p>Вы уверены, что хотите выйти?</p>
    
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Выйти</button>
    </form>
    
    <a href="{{ route('login') }}">Отмена</a>
@endsection
