<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new type</title>
</head>
<body>
    <form action="{{route('create-new-type')}}" method="POST">
    @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        <h1>Type description</h1>
        <input type="text" name="title_description">
        <input type="submit" value="Save result" >
    </form>
</body>
</html>