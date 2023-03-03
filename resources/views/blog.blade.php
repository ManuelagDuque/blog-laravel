@extends('template')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
    <p>
        <strong>{{$post->id}}</strong>
        <a href="{{route('post', $post->slug)}}">
            {{$post->title}}
        </a>
        <span>{{$post->user->name}}</span>
    </p>
    @endforeach
    {{$posts->links()}}
@endsection
