<!DOCTYPE html>
<html>
    <head>
        <!--<link rel="stylesheet" href="../../../Main.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.1/css/font-awesome.min.css" rel="stylesheet">
    <!--<link href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">-->
        <title>Trang chủ</title>
        <link rel="stylesheet" href="/css/mainpage.css">
    </head>

    <body>
    <input hidden name="id" value="{{$account['id']}}">
        @include('headerfooter.header')
        <section>
            <img src="/storage/image_web/stars.png" alt="img" id="stars">
            <img src="/storage/image_web/mountains_behind.png" alt="img" id="mountains_behind">
            <h2 id="text">Main page</h2>
            <a href="#" class="btn" id="btn">Looking for more</a>
            <img src="/storage/image_web/mountains_front.png" alt="img" id="mountains_front">
        </section>
        <div class="sec">
            <h3>Every thing is under here !!!</h3>
            <p>Pick what you want :) !!!</p>
            <div class="container">
                <div class="row">
                @foreach($images as $value)
                    <div class="image">
                        <img src="/storage/image/{{$value['image']}}" alt="img">
                        <div class="details">
                            <h2><span>{{$value['owner']}}</span></h2>
                            <p>{{$value['date']}}</p>
                            <div class="more">
                                <a href="image/{{$value['id']}}" class="read-more">More information</a>
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
        </div>

        </div>
        <script>
            let mountaint_behind = document.getElementById('mountains_behind');
            let star = document.getElementById('stars');
            let mountains_front = document.getElementById('mountains_front');
            let btn = document.getElementById('btn');
            let text = document.getElementById('text');
            let header = document.querySelector('header')

            window.addEventListener('scroll',function(){
                let value = window.scrollY;
                star.style.left = value*0.25 + 'px';
                mountaint_behind.style.top = value*0.5+'px';
                mountains_front.style.top = value*0+'px';
                text.style.marginRight = value*4+'px';
                text.style.marginTop = value*0.25+'px';
                btn.style.marginTop = value*1.5+'px';
                header.style.top = value*0.5+'px';
            })
        </script>
    </body>
</html>