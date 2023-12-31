<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
          <dev class='content_post'>
               <h2 class='title'>{{ $post->title }}</h2>
               <p class='body'>{{ $post->body }}</p>
          </dev>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>