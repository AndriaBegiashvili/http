<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($posts as $post)
    <h1><a href="{{route('showOne',['post'=>$post])}}"> {{$post->title}} </a></h1>
    <h2>{{$post->body}}</h2>
    <hr>
    
    @empty
        <h1>"araa"</h1>    
    @endforelse
    
    
</body>
</html>