<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update tipes</title>
</head>
<body>
    <form action="{{route('admin-image-update')}}" method="POST">
    @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        <h1>Type update</h1>
        <input type="hidden" name="id" value="{{$images['id']}}">
        <input type="hidden" name="image" value="{{$images['image']}}">
        <h2>Title:</h2>
        <input type="text" name="title" value="{{$images['title']}}">

        <h2>Owner:</h2>
        <input type="text" name="owner" value="{{$images['owner']}}">

        <h2>Date:</h2>
        <input type="text" name="date" value="{{$images['date']}}">

        <h2>Types:</h2>
        <input type="text" name="type" value="{{$images['type']}}">
        <br>
        <br>
        <input type="submit" value="Save result" >
    </form>
</body>
</html>