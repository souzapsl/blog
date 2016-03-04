@extends('template')

@section('title')
    Blog do Laravel
@stop

@section('content')
    @foreach ($posts as $post)
        <article>
            <h2><a href="/post/{{ $post['id'] }}">{{ $post['title'] }}</a></h2>
            <p>{!! $post['post'] !!}</p>
            <p><strong>Por {!! $post['author'] !!} em {!! $post['date'] !!}</strong></p>
        </article>
    @endforeach
@stop

@section('menu')
    @include('menu')
@stop