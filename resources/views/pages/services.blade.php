@extends('layouts.basicLayout')
@section('content')

<h1>{{$title}}</h1>
<ul>
    @if ($service0 > 0)
    @foreach ($service0 as $item)
    <div class="container"><h4>{{$item}}</h4></div>
    @endforeach
    @endif

    @if ($service1 > 0)
    @foreach ($service1 as $item)
    <div class="container"><h4>{{$item}}</h4></div>
    @endforeach
    @endif

    @if ($service2 > 0)
    @foreach ($service2 as $item)
    <div class="container"><h4>{{$item}}</h4></div>
    @endforeach
    @endif
    <li></li>
</ul>    
@endsection