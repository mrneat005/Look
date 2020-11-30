@extends('layouts.basicLayout')
@section('content')
<h1 style="font-size: 36px">Posts</h1>
@if (count($posts)>1)
    @foreach ($posts as $post)
<div>    
    <div class="well">
        <h3>{{$post->title}}</h2>
        <h4>{{$post->body}}</h3>
        <small> written on :  {{$post->created_at}}</small>
      
    </div>
</div>

        
    @endforeach
    @else
<div class="container">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded mr-2" alt="...">
          <strong class="mr-auto">Sorry</strong>
          <small>close</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
            :( Sorry no request found...!
        </div>
      </div>
</div>
    @endif
@endsection