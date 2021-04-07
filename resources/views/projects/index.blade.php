@extends('layout')
@section('content')
    <h1>Projects</h1>
        @foreach($projects as $project)
        <li>
        <h3><a href="{{route('projects.show',$project->id)}}">{{$project->title}}</a></h3>
        </li>
        @endforeach
@endsection
