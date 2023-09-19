<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
       <h1>Blog Name</h1>
       <a href="/posts/create">create</a>
       <dev class='posts'>
           @foreach($posts as $post)
               <dev class='post'>
                       <a href="/posts/{{ $post->id }}">
                           <h2 class='title'>{{ $post->title }}</h2>
                       </a>
                   <p class='body'>{{ $post->body }}</p>
               </dev>
           @endforeach
       </dev>
       <div class='paginate'>{{ $posts->links() }}</div></div>
    </body>
</html>
