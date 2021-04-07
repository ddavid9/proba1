@extends('layout')
@section('content')

    <form action="/projects/{{$project->id}}" method=POST>
    @csrf
    @method('PUT')
    cím: <input type="text" name="title" id="title" value="{{$project->title}}">
    <button>frissítés</button>
    </form>

    <form action="/projects/{{$project->id}}" method=POST>
        @csrf
        @method('DELETE')
        <button>törlés</button>
    </form>

@endsection
