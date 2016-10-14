@extends('layouts.master')

@section('content')
<a href="{{ action('PostsController@create') }}" class="btn btn-primary" type="">Create a post</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
		</tr>
	</thead>
	<tbody>
	@foreach($posts as $p)
		<tr>
			<td><a href="{{ action('PostsController@show', $p->id)}}">{{ $p->title }}</a></td>
			<td>{{ $p->url }}</td>
			<td>{{ $p->content }}</td>
		</tr>
	@endforeach
	</tbody>
</table>
{!! $posts->render() !!}
@stop