<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Detail</title>
</head>
<body>
        <h1>Hinh anh</h1>
        <img src="/storage/image/{{$image['image']}}" alt="hinh anh">
        <h3>{{$image['title']}}</h3>
        <h3>{{$image['owner']}}</h3>
        <h4>{{$image['date']}}</h4>
    <a href="/review/{{$image['id']}}">Write review in here</a>
</body>
</html>