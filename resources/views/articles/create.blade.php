@extends('app')
@section('content')
<h1>Write a New Article</h1>
<hr>
{!! Form::open() !!}
	<div class="form-group">
		{!! Form::label('name', 'Name: ') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
{!! Form::close() !!}
@stop