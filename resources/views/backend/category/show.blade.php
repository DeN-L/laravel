@extends('layouts.app')

@section('title')
    Article #{{$html_id}}
@endsection

@section('sidebar')
@endsection

@section('content')
    <article>
        <h3>{{$html_name}}</h3>
    </article>
    <p>
        Description: {{$html_description ?? 'None'}}
    </p>
    <p>
        Parent category: {{$html_name_parent ?? 'None'}}
    </p>
    <button><a href="{{url('admin/category')}}">Back</a></button>
@endsection
