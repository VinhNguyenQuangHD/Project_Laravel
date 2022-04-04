<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>
    <h1>Write review for {{$image['title']}}</h1>
    <form action="{{route('image-create-review')}}" method="post">
    @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
            <input type="hidden" name="title" value="{{$image['title']}}">
            <h4>User</h4>
            <input type="text" name="user">
            <h4>Content</h4>
            <textarea name="content" id="" cols="150" rows="10"></textarea>
            <button>Comment</button>
    </form>
</body>
</html>