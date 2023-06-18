<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-5xl">HomePage</h1>
    @if(Auth::check()) 
        <h1>You're login</h1>
    @endif

    <h1>Article List :</h1>
    @foreach($all as $all)
        <h1>{{$all->title}}</h1>
        <a href="/articles/{{$all->id}}">Click to read</a>
        <a href="/delete/{{$all->id}}">Delete post</a>
        <a href="/articles/{{$all->id}}/edit">Update post</a>
    @endforeach
</body>
</html>