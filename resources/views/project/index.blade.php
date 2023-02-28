@extends('layout')

@section('title')
  <h1>Projects</h1> <a href="/project/create">Ajouter un projet</a>
@endsection

@section('content')
  <ul>
    @foreach ($projects as $project)
      <li>{{ $project->title }}</li>
    @endforeach
  </ul>
@endsection
