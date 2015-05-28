@extends('app')

@section('content')

{!! Form::open(['route' => ['recipes.destroy', $recipe->recipe_id], 'method' => 'delete']) !!}
    <button type="submit" data-submit-confirm-text="Are you sure you want to delete this recipe?" class="pull-right btn btn-link delete">Delete Recipe</button>
{!! Form::close() !!}

{!! Html::link('/recipes/' . $recipe->recipe_id . '/edit', 'Edit Recipe', ['class' => 'pull-right btn btn-link']) !!}

<h2>{{{ $recipe->recipe_name }}}</h2>

{{{ $recipe->recipe_description }}}

@endsection

@section('footer')
<script type="text/javascript" src="{{ asset('/js/recipe.form.js') }}"></script>

@endsection