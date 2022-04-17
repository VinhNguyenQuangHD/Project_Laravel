<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like</title>
</head>
<body>
    <h1>Like for {{$like['owner']}}</h1>
    <form action="{{route('like')}}" method="POST">
    @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        <input type="hidden" name="image_id" value="{{$like['id']}}">
        <input type="hidden" name="owner_image" value="{{$like['owner']}}">
        <h1>Name ?</h1>
        <input type="text" name="user_name">
        <input type="submit" value="Like">
    </form>
</body>
</html>