@extends('layouts.basicLayout')
@section('content')
<h1 style="font-size: 36px">Create Posts</h1>
<br>
<div container class="form">
    {!! Form::open(['action' => 'postController@store','method'=>'POST']) !!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Description')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'write here...!'])}}
    </div>

    <div class="form-group">
        {{Form::submit('submit',['class'=>'btn btn-success'])}}
        <!-- Validation is very easy in laravel go to store function -->
    </div>

{!! Form::close() !!}


</div>

@endsection