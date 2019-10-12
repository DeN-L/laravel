@extends('layouts.app')

@section('title', 'Child Title')

@section('sidebar')
    @parent

    <p>Это дополнение к основной боковой панели.</p>
@endsection

@section('content')
    <p>Это содержимое тела страницы.</p>

    <a href="viber://chat?number=012345678901">Открывает Viber desctop, если он установлен</a>
    <br/>
    <a href="weixin://dl/chat?012345678901">WeChat</a>
@endsection
