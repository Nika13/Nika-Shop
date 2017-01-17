@extends(‘layouts.app’)

@section(‘content’)
 @foreach($all as $one)
  <h3>{{$one->name}}</h3>
 @endforeach
@endsection
