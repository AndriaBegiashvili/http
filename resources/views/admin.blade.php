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
    <h1><a href="{{route('showPost',['post'=>$post])}}"> {{$post->title}} </a></h1>
    <h2>{{$post->body}}</h2>
    <a href="{{route('deletePost',['post' => $post])}}"><button>წაშლ</button></a>
    <hr>
    
    @empty
        <h1>"araa"</h1>    
    @endforelse

    <form method="post">
    @csrf
    <input type="text" name="title" placeholder="saxeli">
    <input type="text" name="body" placeholder="text">
    <button>damateba</button>
    </form>

    
</body>
</html>