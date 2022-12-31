<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main">
        @forelse ($posts as $post)
        <div class="card">
            <div class="ze">
                <h1>{{ $post->title }}</h1>
                <h2 class="post-content">{{ $post->content }}</h2>
            </div>
            <img src="{{ $post->image }}" alt="" class="post-image">
        </div>
        @empty
            <h3>No Posts Available</h3>
        @endforelse
    </div>
    
    
    
</body>
<style>
    body{
        margin: 0%;
        background-color: rgb(22, 21, 21);

    }
    .main{
        width: 100%;
        height: 100vh;
        display:flex;
        justify-content: center;
        align-items: center;
    }
    .ze{
        margin-left: 10px; 
    }
    h1, h2{
        color: white;    
    }
    a{
        text-decoration: none;
    }
    .post-image{
        width: 100%;
        height: 500px;
        padding-top: 20px;
        box-sizing: border-box;
    }
    .card{
        width: 500px;
        height: 640px;
        background-color: rgb(49, 47, 47);
        display: flex;
        flex-direction: column;
        margin-top: 20px;
        border-radius: 10px; 
        /* box-shadow: 2px 2px 2px 2px #ffff; */

    }
</style>
</html>