
@extends('layouts.layout')

@section('content')

@foreach( $comments as $comment )
        <p>{{ $comment->body }}</p>
        <p>{{ $comment->id }}</p>
        <p>{{ $comment->post_id }}</p>
@endforeach
        
@foreach( $comment->posts as $post )
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
        <p>{{ $post->id }}</p>
@endforeach
        
        
@endsection