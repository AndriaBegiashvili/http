<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$post->title}}</h1>
    <h3>{{$post->body}}</h3>
    <hr>
    <div style="margin-left: 40px">
    @forelse ($comments as $comment)
        <h4>{{$comment->name}}</h4>
        <p>{{$comment->text}}</p>
       <a href="{{route('deleteComment',['comment'=> $comment, 'post' => $post ])}}"> <button>washla</button></a>
    @empty
        <p>no comms</p>
    @endforelse
</div>

    
</body>
</html>