@extends('layouts.master')

@section('content')
    @if (!empty($name))
    	<h1>Hello, {{ $name }}</h1>
	@else
	    <h1>You must have a name, right?</h1>
	@endif

	@if(!empty($incremented))
	{{ $rnd = mt_rand(1,100) }}
		<h1>{{ $incremented }}</h1>
		<a href="{{ action('HomeController@increment', array($rnd))}}" title="">Increment {{ $rnd }}</a>
	@endif

@stop