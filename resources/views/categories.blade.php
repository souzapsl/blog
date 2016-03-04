@extends('template')

@section('title')
    Blog do Laravel
@stop

@section('content')
    <h4>Posts da categoria {{ $categories[$category] }}</h4>
    @foreach ($posts as $post)
        @if ($post['category'] == $category)
            <article>
                <h2><a href="/post/{{ $post['id'] }}">{{ $post['title'] }}</a></h2>
                <p>{!! $post['post'] !!}</p>
                <p><strong>Por {!! $post['author'] !!} em {!! $post['date'] !!}</strong></p>
            </article>
        @endif
    @endforeach
@stop

@section('menu')
    @include('menu')
@stop