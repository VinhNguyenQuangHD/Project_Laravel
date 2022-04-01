<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../../Main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
        <title>Trang chủ</title>
    </head>
        <style>

@import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Poppins',sans-serif;
            }
            body{
                min-height: 100vh;
                background: linear-gradient(#2b1055, #7597de);
                
            }
            header{
                position: absolute;
                top: 0; 
                left: 0;
                width: 100%;
                padding: 30px 100px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 10000;
            }
            header .logo{
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                font-size: 2em;
                text-transform: uppercase;
                letter-spacing: 2px;
            }
            header ul li{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            header ul a{
                text-decoration: none;
                padding: 6px 15px ;
                color: #fff;
                text-transform: uppercase;
                border-radius: 20px;
            }
            header ul a:hover, header ul a .active {
                background: #fff;
                color: #2b1055;
            }
            section{
                position: relative;
                width: 100%;
                height: 100vh;
                padding: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            section::before{
                content: '';
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to top, #1c0522,transparent);
                z-index: 1000;
            }
            section img{
                position: absolute;
                top: 0;
                left: 0;
                width: 0px;
                height: 100%;
                object-fit: cover;
                overflow: hidden;
            }
            section img #moon{
                mix-blend-mode: screen;
            }
            section img#mountains_front{
                z-index: 10;
            }
            #text{
                position: absolute;
                color: #fff;
                white-space: normal;
                font-size: 6.5vw;
                z-index: 9;
                
            }
            .btn{
                text-decoration: none;
                padding: 8px 30px;
                border-radius: 40px;
                background: #fff;
                color: #2b1055;
                transform: translateY(100px);
            }
            .sec{
                position: relative;
                padding: 100px;
                background: #1c0522;
            }
            .sec h3{
                font-size: 3.5em;
                margin-bottom: 10px;
                color: #fff;
            }
            .Parent__Container {
                background: #1c0522;
}
            .sec p{
                font-size: 1.5em;
                color: #fff;
            }
            .container{
                position: relative;
                width: 1100px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                padding: 30px;
            }
            .container .card{
                max-width: 450px;
                position: relative;
                height: 260px;
                background: transparent;
                margin: 30px 10px;
                padding: 20px 15px;
                display: flex;
                flex-direction: column;
                box-shadow: 0 5px 20px rgba(0,0,0,0.5);
                transition: 0.3s ease-in-out;
            }
            .container .card:hover{
                height: 400px;
            }
            .container .card .img_box{
                position: relative;
                width: 300px;
                /*height: 450px;*/
                top: -40px;
                left: 0px;
                z-index: 1;
                box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            }
            .container .card .img_box img{
                max-width: 100%;
                border-radius: 4px;
            }
            .container .card .descr{
                position: relative;
                margin-top: -140px;
                padding: 10px 15px;
                text-align: right;
                color: #111;
                visibility: hidden;
                opacity: 0;
                transition: 0.3s ease-in-out;
            }
            .container .card .descr h4{
                color: #fff;
            }

            .container .card:hover .descr{
                visibility: visible;
                opacity: 1;
                margin-top: -40px;
                transition-delay: 0.3s;  
            }
            .Content__Second {
                position: relative;
                padding: 100px;
            }
            div .Title__Content__Second:nth-child(1) {
    color: white;
    font-size: 3.5rem;
    font-weight: 600;
}

div .Title__Content__Second:nth-child(2) {
    color: white;
    margin-top: 10px;
    font-size: 22px;
}

.produce__Container {
    width: 300px;
    height: 340px;
    position: relative;
}

.Img__Produce {
    overflow: hidden;
    height: 75%;
    background: #00000061;
}

.title__Produce {
    opacity: 1;
    transition: 0.5s;
    padding: 5px;
}

.name__Produce {}

.title__Produce div {
    color: whitesmoke;
    margin: 5px 0px 5px 0px;
    /* transition: 0.5s; */
}
.Img__Produce img {
    transition: 1s;
    width: 100%;
    height: 100%;
    transform: scale(1);
}
.produce__Container:hover .Img__Produce img {
    transform: scale(1.5);
    overflow: hidden;
}

.produce__Container:hover .title__Produce {
    transition: 0.5s;
    opacity: 0;
}
            </style>
    </head>
    <body>
    <input hidden name="id" value="{{$account['id']}}">
        <header>
            <a href="main" class="logo">LOGO</a>
            <ul>
                <a href="profile/{{$account['id']}}">{{$account['username']}}</a>
                <a href="galery/{{$account['id']}}" class="active">GALERRY</a>
                <a href="upload">ABOUT</a>
                <a href="#">CREDIT</a>
                <a href="admin">ADMIN PAGE</a>
            </ul>
        </header>
        <section>
            <img src="/storage/img/stars.png" alt="img" id="stars">
            <img src="/storage/img/mountains_behind.png" alt="img" id="mountains_behind">
            <h2 id="text">Main page</h2>
            <a href="#" class="btn" id="btn">Looking for more</a>
            <img src="/storage/img/mountains_front.png" alt="img" id="mountains_front">
        </section>
        <div class="Parent__Container">
        <div class="sec">
            <h3>Every thing is under here !!!</h3>
            <p>Pick what you want :) !!!</p>
            <div class="container">
                @foreach($images as $value)
                    <div class="card">
                        <div class="img_box">
                            <img src="/storage/image/{{$value['image']}}" alt="img">
                        </div>
                        <div class="descr">
                            <h4>{{$value['owner']}}</h4>
                            <p>{{$value['date']}}</p>
                            <a href="#">Xem them</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="Content__Second">
            <div class="Title__Content__Second">
            What's new !!
            </div>
            <div class="Title__Content__Second">
            Some thing verry special is comming in, prepare for it
            </div>
            <div class="List__Content">
                <div class="produce__Container">
                    <div class="Img__Produce">
                        <img src="https://images.pexels.com/photos/11358793/pexels-photo-11358793.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940  " alt="img">
                    </div>
                    <div class="title__Produce">
                    <div class="name__Produce">
                        Trên đời ai cũng buồn
                    </div>
                    <div class="Rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="Date__Push">
                        12/3/2022
                    </div>
                </div>
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