<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mainpage.css">
    <title>Your galery</title>
</head>
<body>
    <div class="favorite">
            <div class="title">
                <br>
                <h1 style="color: #fff; margin-left: 30px;">Collection Library of {{$account['username']}}</h1>
                <form action="" method="">
                <input type="hidden" name="name" value="{{$account['username']}}">
                <div class="container">
                    <div class="row">
                    @foreach($datas as $value)
                        <div class="image">
                            <img src="/storage/image/{{$value['image']}}" alt="img">
                            <div class="details">
                                <h2><span>{{$value['owner']}}</span></h2>
                                <p>{{$value['date']}}</p>
                                <div class="more">
                                    <a href="/image/{{$value['id']}}" class="read-more">More information</a>
                                    <div class="icon-link">
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-paperclip"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
                </form>
            </div>
        </div>
</body>
</html>