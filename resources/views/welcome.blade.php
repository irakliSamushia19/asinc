<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <div class="main">
        @forelse ($posts as $post)
            <div class="card">
                <div class="ze">
                    <a href="{{ route('showPost', ['post'=> $post]) }}"><h1>{{ $post->title }}</h1></a>
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
    .ze{
        margin-left: 10px; 
    }
    h1, h2{
        color: white;    
    }
    a{
        text-decoration: none;
    }
    .main{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .card{
        width: 500px;
        height: 600px;
        background-color: rgb(49, 47, 47);
        display: flex;
        flex-direction: column;
        margin-top: 20px;
        border-radius: 10px; 
        /* box-shadow: 2px 2px 2px 2px #ffff; */

    }
    .post-content{
        margin: 0%;
    }
    .post-image{
        width: 100%;
        height: 500px;
        padding-bottom: 20px;
        padding-top: 20px;
        box-sizing: border-box;
    }
</style>
</html>