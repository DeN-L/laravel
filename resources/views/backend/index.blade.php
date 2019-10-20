@extends('layouts.app')

@section('title', 'Backend')

@section('sidebar')
    <a href="{{url('admin/category')}}">Category </a>
    <br>
    <a href="{{url('admin/blog')}}">Blog </a>
@endsection