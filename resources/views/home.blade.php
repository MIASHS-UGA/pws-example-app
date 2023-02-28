@extends('layout')

@section('title')
  <h1>Home </h1>
@endsection

@section('content')
  <ul>
    @foreach ($tasks as $task )
    <li>{{$task}}</li>
    @endforeach
  </ul>
@endsection
