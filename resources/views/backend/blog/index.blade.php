@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <button><a href="{{route('article_create')}}">Create</a></button>
    @foreach($x_articles as $o_article)
        <article>
            <h3>{{$o_article->title}}</h3>
            <a href="{{ route('article_edit', ['id' => $o_article->id]) }}">
                Edit
            </a> |
            <a href="{{  url('admin/blog/delete', [$o_article->id]) }}">
                Delete
            </a>
        </article>

    @endforeach
@endsection
