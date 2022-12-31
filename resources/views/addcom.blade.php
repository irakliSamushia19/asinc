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

    <div class="comments"> 
        @forelse($comments as $comment)
            <p>{{$comment->title}}</p>
            <p>{{$comment->comment}}</p>
        @empty

        @endforelse
    </div>
        
    
    <div>
        <input type="hidden" name="comment_id" class="posts_id" value="{{ $post->id }}">
        <input type="text" name="title" class="title">
        <input type="text" name="comment" class="comment">
        <button class="addcomment" class="btn btn-success btn-sm">add comment</button>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        document.queryselector('.addcomment').addeventlistener('click', function () {
            let title = document.queryselector('.title').value
            let comment = document.queryselector('.comment').value
            let comment_id = document.queryselector('posts_id').value

            axios.post('http://localhost:8000/api/comments', {
                title: title,
                comment: comment,
                comment_id: posts_id
            })
            .then(function (response) {
                document.queryselector('.comments').innerHTML += `<p>${response.data.name}</p> <p>${response.data.message}</p>`;
            
            })
            .catch(function (error) {
                console.log(error);
            });
        })


    </script>
</body>
<style>
    .comments{
        display: flex;
        flex-direction: column;
    }
</style>
</html>