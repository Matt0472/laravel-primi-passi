@extends('layouts.pagina')
@section('content') 
  @foreach ($cd as $disco)
    <div class="cd">
      <img src="{{$disco['poster']}}" alt="">
      <h3>{{$disco['title']}}</h3>
      <small>{{$disco['author']}}</small>
      <strong>{{$disco['year']}}</strong>
    </div>
  @endforeach
@endsection