<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <h1>Upload Image</h1>
    <form action="{{route('upload-image')}}" method="post">
    @if(Session::get('complete'))
                <h1 >{{Session::get('complete')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        <input type="file" name="image">
        <input type="submit" name="Save Img">
    </form>
    <ul>
        @foreach($images as $image)
        <li>{{$image->image_name}}<img src="{{asset('storage/image'.$image->image_name)}}"></li>
        @endforeach
    </ul>
</body>
</html>