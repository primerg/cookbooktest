@extends('app')

@section('content')

{!! Html::link('/categories/create', 'Create category') !!}

<h2>Recipes Categories</h2>

@if ($categories)
    <ul>
    @foreach($categories as $category)
        <li>{!! Html::link('/c/' . $category->category_id, $category->category_name) !!}</li>
    @endforeach
    </ul>
@endif

@endsection