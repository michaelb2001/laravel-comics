@extends('layouts.template')

@section('main')
    
@endsection

@section('jumbotron')

    <div class="jumbotron">

    </div>
    
@endsection

@section('comics')

<div class="container-fluid">
    <div class="striscetta">
      CURRENT SERIES
    </div>

    
    <div class="container comics">
        @foreach ($array as $key => $value)
            <img src="{{$value['thumb']}}">
        @endforeach
    </div>
    
    <a href="#">LOAD MORE</a>

  </div>
    
@endsection