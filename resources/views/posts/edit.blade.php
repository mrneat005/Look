@extends('layouts.basicLayout')
@section('content')
<h1 style="font-size: 36px">Edit Post</h1>
<br>
<div container class="form">
    {!! Form::open(['action' => ['postController@update',$post->id],'method'=>'POST']) !!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Description')}}
        {{Form::textarea('body',$post->body,['id' => 'article-ckeditor','class'=>'form-control article-cheditor','placeholder'=>'write here...!'])}}
    </div>

    <div class="form-group">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-success'])}}
        <!-- Validation is very easy in laravel go to store function -->
    </div>

{!! Form::close() !!}


</div>
@endsection