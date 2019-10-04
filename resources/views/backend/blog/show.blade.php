@extends('layouts.app')

@section('title')
    Article #{{$html_id}}
@endsection

@section('content')
    <article>
        <h3>{{$html_title}}</h3>
    </article>
    <p>
        {{$html_text}}
    </p>
@endsection
