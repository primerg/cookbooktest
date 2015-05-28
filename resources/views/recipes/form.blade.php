@extends('app')

@section('content')
<div class="container clearfix">

@include('partials/form_error')

@if ($recipe)
{!! Form::model($recipe, ['route' => ['recipes.update', $recipe->recipe_id], 'method' => 'PUT']) !!}
@else
{!! Form::model($recipe, ['route' => ['recipes.store']]) !!}
@endif

<div class="form-group">
    <label class="col-sm-2">Recipe Name <span class="required">*</span>:</label>
    {!! Form::text('recipe_name', old('recipe_name'), ['class' => 'sm-form-control ']) !!}
</div>

<div class="form-group">
    <label class="col-sm-2">Category <span class="required">*</span>:</label>
    {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'sm-form-control ']) !!}
</div>

<div class="form-group">
    <label class="col-sm-2">Instruction <span class="required">*</span>:</label>
    {!! Form::textarea('recipe_description', old('recipe_description'), ['class' => 'sm-form-control']) !!}
</div>

<div class="form-group">
    <div class="col-sm-2"></div>
    <input type="submit" value="Save" class="btn btn-default" />
</div>

{!! Form::close() !!}


</div>


@endsection