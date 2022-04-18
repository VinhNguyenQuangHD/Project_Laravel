<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/galerry_detail.css">
    <title>Picture Detail</title>
    
</head>
<body>
    <div class="Container">
            <div class="Img__PRoduct">
            <img src="/storage/image/{{$image['image']}}" alt="hinh anh">
            <input type="hidden" name="title" value="{{$image['title']}}">
            <input type="hidden" name="type" value="{{$image['type']}}">
        </div>
        <div class="Detail__Product">
            <h3>Tieu de: {{$image['title']}}</h3>
            <h3>Ten tac gia: {{$image['owner']}}</h3>
            <h4>Ngay dang: {{$image['date']}}</h4>
            <div class="Button__Custom--click">
            <a href="https://www.facebook.com/">Share</a>
            <a href="#">Donate for this Author</a>
            </div>
        </div>
    </div>
        <br>
        <div class="Page__Review">
            <a href="/like/{{$image['id']}}">Like this picture</a>
            <br>
        <h2>Same type</h2>
            <a href="/same-type/{{$image['type']}}">View same type of image</a>
            <h2>Review</h2>
            @include('auth.review')
        <h2>Downloading image</h2>
        <br>
        </div>

        <h1>Comments list</h1>
        @foreach($comment as $value)
        <div class="comment__Container">
            <h3>{{$value['user']}}</h3>
            <div class="Content__Pra">
            <p>{{$value['content']}}</p>
            </div>
        </div>
        @endforeach
</body>
</html>