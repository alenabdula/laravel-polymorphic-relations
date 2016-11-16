@extends('layout')

@section('content')

    <div class="col-sm-12">
        @unless($articles->count())
            <h1>No resources found!</h1>
        @endunless
        @foreach($articles as $article)
            <h1>{{ $article->title }}</h1>
            <p>Posted {{ $article->created_at }}, Comments ({{ $article->comments()->count() }})</p>
            <ul>
                <li><a href="{{ route('article.show', [$article->id]) }}">View</a></li>
                <li><a href="{{ route('article.edit', [$article->id]) }}">Edit</a></li>
                <li>
                    <a @click.prevent="destroy('{{$article->title}}', {{$article->id}})" href="{{ route('article.destroy', [$article->id]) }}">Delete</a>
                    <form id="destroy-{{$article->id}}" action="{{ route('article.destroy', ['id' => $article->id]) }}" method="POST" style="display: none;">{{ csrf_field() }} {{ method_field('DELETE') }}</form>
                </li>
            </ul>
            <hr>
        @endforeach
    </div>

@stop