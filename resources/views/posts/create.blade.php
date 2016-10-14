@extends('layouts.master')

@section('content')
	<h1>Create post</h1>
	
	{{-- @if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif --}}
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		@if($errors->has('title'))
		<div class="alert alert-danger">
			{{ $errors->first('title') }}
		</div>
		@endif
		<br>
		URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		@if($errors->has('url'))
		<div class="alert alert-danger">
			{{ $errors->first('url') }}
		</div>
		@endif
		<br>
		Content: <textarea class="form-control" name="content" rows="5" cols="40">{{ old('content') }}</textarea>
		@if($errors->has('content'))
		<div class="alert alert-danger">
			{{ $errors->first('content') }}
		</div>
		@endif
		<input class="btn-success btn" type="submit">
	</form>
@stop