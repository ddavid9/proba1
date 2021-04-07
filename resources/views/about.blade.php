@extends('layout')
@section('header')
<div id="banner" class="container">
    <h2>Maecenas luctus lectus</h2>
    <p>This is <strong>SimpleWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
    <a href="#" class="button">Etiam posuere</a> </div>
@endsection

@extends('layout')
@section('content')
    <h1>about:  yes
    </h1>
@endsection

@extends('layout')
@section('articles')
        @foreach($articles as $article)
        <li>
        <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
        <p>{{$article->excerpt}}</p>
        </li>
        @endforeach
@endsection