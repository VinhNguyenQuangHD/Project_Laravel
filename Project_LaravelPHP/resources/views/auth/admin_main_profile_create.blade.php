<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create user</h2>
    <form action="{{route('admin-create-progress')}}" method="POST">
        @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        <h4>Username</h4>
        <input type="text" name="username">
        <h4>Email</h4>
        <input type="text" name="email">
        <h4>Social link</h4>
        <input type="text" name="socialnetwork">
        <h4>Ages</h4>
        <input type="text" name="ages">
        <h4>Types</h4>
        <input type="text" name="type">
        <button type="submit">Create user</button>
    </form>
</body>
</html>