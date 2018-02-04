@extends('layouts.admin')
@section('content')
    <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h2>Добро пожаловать{{\Auth::user()->email}}</h2>
        <br>
        @if (\Auth::user()->isAdmin == 1)
            <a href="{{ route('admin') }}">В админку</a>
        @endif
        <a href="{{ route('logout') }}">Выйти</a>
    </div>

@stop