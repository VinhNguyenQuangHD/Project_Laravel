<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/gallery.Css"> 
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <title>Your galery</title>
</head>
<body>
    <img src="https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
    <header>
        
    </header>
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
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide card">
                                <div class="img_box">
                                    <img src="https://images.pexels.com/photos/1964471/pexels-photo-1964471.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="img">
                                </div>
                                <div class="descr">
                                    <div class="inF__userPost">
                                    <h4>Tieu de</h4>
                                    <div class="inF__user__name">Ten user</div>
                                    </div>
                                    <a href="#">Xem them</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>