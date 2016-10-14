<!DOCTYPE html>
<html lang="en">
<head>
@include('partials.header')
</head>
<body>
	<div class="container">	
		@if (session()->has('msg'))
		    <div class="alert alert-success">{{ session('msg') }}</div>
		@endif
		@yield('content')
	</div>
</body>
<footer>
	{{-- @include('partials.footer') --}}
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>