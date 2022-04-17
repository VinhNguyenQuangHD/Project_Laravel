<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update tipes</title>
</head>
<body>
    <form action="{{route('admin-type-update')}}" method="POST">
    @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        <h1>Type update</h1>
        <input type="hidden" name="id" value="{{$types['id']}}">
        <input type="text" name="title_description" value="{{$types['title_description']}}">
        <input type="submit" value="Save result" >
    </form>
</body>
</html>