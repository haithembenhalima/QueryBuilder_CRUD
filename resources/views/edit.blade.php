<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Insert post</title>
    </head>

    <body>
        <h3>Edit post</h3>

        <form action="{{route('posts.update',$posts->id)}}" method="post">
            @csrf
            <input type="text" name="title" value="{{$posts->title}}"><br><br>
            <input type="text" name="content" value="{{$posts->content}}"><br><br>
            <input type="submit" value="Insert">
        </form>        
    </body>
</html>