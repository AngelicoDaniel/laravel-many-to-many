<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        body{
            background-color: lightgray;
            color: blue
        }
    </style>
</head>
<body>
    <h1>Hai scritto il post: {{ $post->title }}</h1>
    <p>
        Il testo è:
        {{$post->body}}
    </p>
    <p>
        le categorie sono: {{$post->category->name}}
    </p>
    <p>
        <ul>
            @foreach ($post->tags as $elem)
                <li>{{$elem->name}}</li>
            @endforeach
        </ul>
    </p>
</body>
</html>
