@extends('layout')
@section('content')

    <form action="/projects" method="POST">
        @csrf
        cím: <input type="text" name="title" id="title" value="{{old('title')}}" required>
        @if ( $errors -> has('title'))
        <p>{{ $errors->first('title') }}</p>
        @endif
        <button>mentés</button>
    </form>
@endsection

