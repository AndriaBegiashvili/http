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
    <div id="comentar" style="margin-left: 40px">
    @forelse ($comments as $comment)
        <h4>{{$comment->name}}</h4>
        <p>{{$comment->text}}</p>
    @empty
        <p>no comms</p>
    @endforelse
</div>

    <input type="text" name = "title" id="title">
    <input type="text" name = "body" id="comment">
    <button id="addCom" value="{{$post->id}}">dakomentareba</button>

    <script>
        document.getElementById("addCom").addEventListener("click", function(){
            const title = document.getElementById("title").value;
            const comment = document.getElementById("comment").value;
            const posts_id = document.getElementById("addCom").value;
        fetch('http://localhost:8000/api/comments', {
            method:"POST",
            headers: {
                'Content-Type': 'application/json'},
            body: JSON.stringify({
                title: title,
                comment: comment,
                posts_id: posts_id
            })
        })
        .then(response =>{
            return response.json();
        }).then(data =>{
            console.log(data);
            const message = `<h4>${data.name}</h4><p>${data.text}</p>`
            document.getElementById('comentar').innerHTML += message
        })

    })
    </script>

</body>
</html>