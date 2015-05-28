@extends('app')

@section('content')
<div class="container clearfix">

@include('partials/form_error')

{!! Form::open( array(
    'url' => 'categories',
    'method' => 'post',
) ) !!}

<div class="form-group">
    <label class="col-sm-2">Category Name <span class="required">*</span>:</label>
    {!! Form::text('category_name', old('category_name'), ['class' => 'sm-form-control field required']) !!}
</div>

<div class="form-group">
    <div class="col-sm-2"></div>
    <input type="submit" value="Save" class="btn btn-default" />
</div>

{!! Form::close() !!}

</div>


@endsection

@section('footer')
<script type="text/javascript" src="{{ asset('/js/category.form.js') }}"></script>

@endsection