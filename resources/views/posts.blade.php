<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>List of posts</title>
    </head>

    <body>
       
<h1>List of posts</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>
            <a href="{{route('posts.edit',$post->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="{{route('posts.delete',$post->id)}}"><button type="button" class="btn btn-danger">delete</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{route('posts.insert')}}"><button type="button" class="btn btn-primary">Insert new post</button></a>

    </body>
</html>




