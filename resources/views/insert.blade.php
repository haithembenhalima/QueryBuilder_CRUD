<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Insert post</title>
    </head>

    <body>
        <h3>insert new post</h3>

        <form action="{{url('posts')}}" method="post">
            @csrf
            <input type="text" name="title" placeholder="post title"><br><br>
            <input type="text" name="content" placeholder="post content" ><br><br>
            <input type="submit" value="Insert">
        </form>        
    </body>
</html>

