@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    @foreach($x_articles as $o_article)
        <article>
            <a href="{{route('articles')}}/{{$o_article->id}}">
                <h3>{{$o_article->title}}</h3>
            </a>
        </article>
        <p>
            {{$o_article->text}}
        </p>
        <p>
            {{$o_article->created_at}}
        </p>
    @endforeach
@endsection
