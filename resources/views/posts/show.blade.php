@extends('layouts.master')

@section('content')
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->url }}</td>
			<td>{{ $post->content }}</td>
		</tr>
	</tbody>
</table>
<div>
	<form action="{{ action('PostsController@destroy',$post->id) }}" method="POST">
	    {!! csrf_field() !!}
	    {!! method_field('DELETE') !!}
	    <a class="btn btn-primary" href="{{ action('PostsController@index') }}">Home</a>
		<a class="btn btn-warning" href="{{ action('PostsController@edit', $post->id) }}">
	Edit</a>
	    <button class="btn btn-danger">Delete</button>
	</form>
</div>
@stop