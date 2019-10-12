@extends('layouts.app')

@section('title', 'Categories')

@section('sidebar')
@endsection

@section('content')
    <button><a href="{{url('admin/category/create')}}">Create</a></button>
    @foreach($a_categories as $o_category)
        <article>
            <h3>
                <a href="{{url('admin/category', [$o_category->k_category])}}">
                    {{$o_category->text_name}}
                </a>
            </h3>
            <a href="{{ url('admin/category/edit', ['id' => $o_category->k_category]) }}">
                Edit
            </a> |
            <a href="{{ url('admin/category/delete', [$o_category->k_category]) }}">
                Delete
            </a>
        </article>
    @endforeach
@endsection
