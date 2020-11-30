@extends('layouts.basicLayout')
@section('content')
<h1 style="font-size: 36px">Posts</h1>
<br>
@if (count($posts)>0)
    @foreach ($posts as $post)
<div class="container ">    
    <div class="well ">
        <h3>{{$post->title}}</h2>
        <h4>{{$post->body}}</h3>
        <small> written on :  {{$post->created_at}}</small>
      <!--  <button <a href="posts/{{$post->id}}"> type="button" class="btn btn-outline-success">View</button>-->
      <a href="/posts/{{$post->id}}" class="btn btn-outline-success bg-primary" role="button" aria-pressed="true">show</a></div>
    </div>
</div>
    @endforeach
    @else
<div class="container">
            <h2>:( Sorry no request found...!</h2>
</div>
    @endif
@endsection