@extends('layout')

@section('content')


<article class="col-sm-12">
    <h1>{{ $article->title }}</h1>
    <div class="entry">
        {!! $article->body !!}
    </div>
    @if($article->comments->count())
        <div class="commets">
            <h2>Comments</h2>
            <ol>
                @foreach($article->comments as $comment)
                    <li>{{ $comment->body }}</li>
                @endforeach
            </ol>
        </div>
    @endif
    <div class="comment-form">
        <h2>Leave a Replay</h2>
        <form method="POST" action="{{ url('article/' . $article->id . '/comment') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="body">Comment Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit Comment</button>
            </div>
        </form>
    </div>
</article>


@stop