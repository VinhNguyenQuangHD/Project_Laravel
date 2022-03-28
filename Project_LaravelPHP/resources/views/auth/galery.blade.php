<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your galery</title>
</head>
<body>

<div class="favorite">
            <div class="title">
                <h1>Favorite Library of {{$galery['username']}}</h1>
                
                <form action="" method="">
                <input type="hidden" name="name" value="{{$galery['username']}}">
                    <div class="container">
                        @foreach($datas as $data)
                            <div class="card">
                                <div class="img_box">
                                    <img src="/storage/image/{{$data['image']}}" alt="img">
                                </div>
                                <div class="descr">
                                    <h4>{{$data['owner']}}</h4>
                                    <p>{{$data['date']}}</p>
                                    <a href="#">Xem them</a>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </form>
            </div>
        </div>
        <div class="title">
                <h1>Your Library</h1>
                <form action="" method="">
                    <input type="hidden" name="username" value="#">
                    <div class="container">
                            <div class="card">
                                <div class="img_box">
                                    <img src="#" alt="img">
                                </div>
                                <div class="descr">
                                    <h4>Tieu de</h4>
                                    <p>nguoi dung</p>
                                    <a href="#">Xem them</a>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>