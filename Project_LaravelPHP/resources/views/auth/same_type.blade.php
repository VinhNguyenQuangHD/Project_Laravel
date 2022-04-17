<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mainpage.css">
</head>
<body>
<br>
<h2 style="margin-left: 40px; color:#fff;">Same types with the image you saw</h2>
            <div class="container">
                <div class="row">
                @foreach($type as $value)
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
</body>
</html>