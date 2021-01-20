@extends('layouts.app')
@section('content')
    <h2 class="amit">Post controller</h2>
   @if (count($posts) > 0)
   @foreach ($posts as $post)
        <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>
       
   @endforeach<br>
   {{$posts->links()}}
   @else
   
        <p>no post found</p>
       
   @endif
   
@endsection