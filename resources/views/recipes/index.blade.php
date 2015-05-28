@extends('app')

@section('content')

{!! Html::link('/recipes/create', 'Create new recipe', ['class' => 'pull-right ']) !!}

@if ($category)
<h2>Category - {{{ $category->category_name }}}</h2>
@else 
<h2>All Recipes</h2>
@endif

@if ($recipes)
    <ul>
    @foreach($recipes as $recipe)
        <li>{!! Html::link('/recipes/' . $recipe->recipe_id, $recipe->recipe_name) !!}</li>
    @endforeach
    </ul>
@endif

@endsection