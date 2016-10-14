@extends('layouts.master')

@section('content')
    {{-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <h1>Edit Post</h1>
    <form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        Title: <input class="form-control" type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">
        @if($errors->has('title'))
        <div class="alert alert-danger">
            {{ $errors->first('title') }}
        </div>
        @endif
        <br>
        Url: <input class="form-control" type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">
        @if($errors->has('url'))
        <div class="alert alert-danger">
            {{ $errors->first('url') }}
        </div>
        @endif
        <br>
        Content: <textarea class="form-control" name="content">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>
        @if($errors->has('content'))
        <div class="alert alert-danger">
            {{ $errors->first('content') }}
        </div>
        @endif
        <br>
        <button class="btn btn-primary">Update</button>
    </form>
@stop