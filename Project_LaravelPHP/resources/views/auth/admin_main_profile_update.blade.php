<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Update user</h2>
    <form action="{{route('admin-update-progress')}}" method="POST">
        @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        <input hidden name="id" value="{{$profile['id']}}">
        <h4>Username</h4>
        <input type="text" name="username" value="{{$profile['username']}}">
        <h4>Email</h4>
        <input type="text" name="email" value="{{$profile['email']}}">
        <h4>Social link</h4>
        <input type="text" name="socialnetwork" value="{{$profile['socialnetwork']}}">
        <h4>Ages</h4>
        <input type="text" name="ages" value="{{$profile['ages']}}">
        <h4>Types</h4>
        <input type="text" name="type" value="{{$profile['type']}}">
        <button type="submit">Update user</button>
    </form>
</body>
</html>