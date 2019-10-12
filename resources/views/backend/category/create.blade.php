@extends('layouts.app')

@section('title', 'Create Category')

@section('sidebar')
@endsection

@section('content')
    <form action='{{url('/admin/category/store')}} method="POST'>
        <div>
            <input
                name="name"
                type="text"
                placeholder="Category Name"
                value="{{!empty($o_category_edit->text_name) ? $o_category_edit->text_name : ''}}"
            />
        </div>
        <br>
        <div>
            <input
                name="description"
                type="text"
                placeholder="Description"
                value="{{!empty($o_category_edit->text_description) ? $o_category_edit->text_description : ''}}"
            />
        </div>
        <br>
        <div>
            <select>
                <option value="0">-Родительская категория-</option>
                @foreach($o_categories as $o_category)
                    <option
                        value="{{$o_category->k_category}}"
                        {{
                            !empty($o_category_edit) &&
                            $o_category_edit->k_category_parent == $o_category->k_category ?
                            'selected' : ''
                        }}
                    >
                        {{$o_category->text_name}}
                    </option>
                @endforeach
            </select>
        </div>
        <br>
        <button>Save</button>
    </form>
    <button><a href="{{url('admin/category')}}">Back</a></button>
@endsection