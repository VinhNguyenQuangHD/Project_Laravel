<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
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
                width: 100%;
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
                max-width: 550px;
                position: relative;
                height: 260px;
                background: #fff;
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
                width: 450px;
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
            .container .card:hover .descr{
                visibility: visible;
                opacity: 1;
                margin-top: -40px;
                transition-delay: 0.3s;  
            }
        </style>
    </head>
    <body>
    <input hidden name="id" value="{{$account['id']}}">
        <header>
            <a href="main" class="logo">LOGO</a>
            <ul>
                <a href="profile">{{$account['username']}}</a>
                <a href="upload" class="active">GALERRY</a>
                <a href="#">ABOUT</a>
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
        <div class="sec">
            <h3>What's new !!</h3>
            <p>Some thing verry special is comming in, prepare for it</p>
            <div class="container">
                <div class="card">
                    <div class="img_box">
                        <img src="https://img.freepik.com/free-photo/mountain-journey_1163-3320.jpg?t=st=1647623186~exp=1647623786~hmac=a55857bb7926978fe71bedc0c556504aa747ae186fd9bdf9f8c635e44deccdca" alt="img">
                    </div>
                    <div class="descr">
                        <h4>Tieu_de</h4>
                        <p>#Tac gia</p>
                        <a href="#">Xem them</a>
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