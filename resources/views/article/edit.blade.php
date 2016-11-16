@extends('layout')

@section('content')
    <div class="col-sm-12">
        <form action="{{ route('article.update', ['id' => $article->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{ $article->title }}" class="form-control" type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ $article->body }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@stop