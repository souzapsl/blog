@extends('template')

@section('title')
    Blog do Laravel
@stop

@section('content')
        <article>
            <h2>{{ $singlepost['title'] }}</h2>
            <p>{!! $singlepost['post'] !!}</p>
            <p><strong>Por {!! $singlepost['author'] !!} em {!! $singlepost['date'] !!}</strong></p>
        </article>
        
        <h4>Outros posts</h4>

        @foreach ($posts as $post)
            @if ($post['id'] != $singlepost['id'])
                <div><a href="/post/{{ $post['id'] }}">{{ $post['title'] }}</a></div>
            @endif
        @endforeach
@stop

@section('menu')
    @include('menu')
@stop