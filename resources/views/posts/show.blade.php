@extends('layouts.basicLayout')
@section('content')
<div bg-dark><h1 style="font-size: 36px">Post {{$myPost->title}}</h1>
    <h3>Post number :{{$myPost->id}}</h2>
    <h3>{{$myPost->title}}</h2>
    <h4>{{$myPost->body}}</h3>
    <small> written on :  {{$myPost->created_at}}</small>    
    <a href="/posts" class="btn btn-outline-success active" role="button" aria-pressed="true">Go Back</a></div>

        
@endsection