@extends('layouts.basicLayout')
@section('content')
<div bg-dark><h1 style="font-size: 36px">Post {{$post->title}}</h1>
    <h3>Post number :{{$post->id}}</h3>
        <h3>Posted by :{{$post->user_name}}</h3>
    <h3>{{$post->title}}</h2>
    <h4>{{$post->body}}</h3>
    <small> written on :  {{$post->created_at}}</small> 
</div>
<a href="/posts/{{$post->id}}/edit" class="btn btn-success active" role="button" aria-pressed="true">Edit</a>   
<a href="/posts" class="btn btn-outline-success active" role="button" aria-pressed="true">Go Back</a>
     {!!Form::open(['action' => ['postController@destroy',$post->id],'method'=>'POST','class'=>'pull-left'])!!}
     {{Form::hidden('_method', 'DELETE')}}
     {{Form::submit('Delete', ['class'=> 'btn btn-danger'] )}}
     {!!Form::close()!!}   
@endsection