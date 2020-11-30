@extends('layouts.basicLayout')
@section('content')

<h1>{{$title}}</h1>
<ul>
    @if ($service0 > 0)<div class="card">
        <div class="card-header">
        </div>
        <div class="card-body sm-6 bg-dark">
            @foreach ($service0 as $item)
            <div class="container"><h4>{{$item}}</h4></div>
            @endforeach
          <a href="#" class="btn btn-outline-success">Try</a>
        </div>
      </div>
 
 
    @endif

    @if ($service1 > 0)<div class="card">
        <div class="card-header">
        </div>
        <div class="card-body sm-6 bg-dark">
            @foreach ($service1 as $item)
            <div class="container"><h4>{{$item}}</h4></div>
            @endforeach
          <a href="#" class="btn btn-outline-success">Try</a>
        </div>
      </div>
 
    @endif

    @if ($service2 > 0)
    
    <div class="card-header md-5">
    </div>
    <div class="card-body bg-dark">
        @foreach ($service2 as $item)
        <div class="container"><h4>{{$item}}</h4></div>
        @endforeach
      <a href="#" class="btn btn-outline-success">Try</a>
    </div>
  </div>

    @endif
    <li></li>
</ul>    
@endsection