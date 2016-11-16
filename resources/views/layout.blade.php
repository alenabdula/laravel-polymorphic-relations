<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-primary" href="{{ route('article.index') }}">Articles</a>
                    <a class="btn btn-primary" href="{{ route('article.create') }}">Add New Article</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
