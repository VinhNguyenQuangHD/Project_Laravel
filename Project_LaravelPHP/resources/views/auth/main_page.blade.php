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
            .main{
                font-size: 16px;
                margin: 0;
                margin-top: 10px;
                background: transparent;
                display: flexbox;
                align-items: center;
                justify-content: space-around;
                min-height: 50vh;
            }
            img{
                object-fit: cover;
                max-width: 100%;
            }
            .ui-ux{
                width: 400px;
                background: radial-gradient(#111 50%, #000 100%);
                overflow: hidden;
            }
            .ui-ux img{
                transform: scale(1.3);
                transition: all 0.3s ease-out;
            }
            .ui-ux:hover .descr h3{
                opacity: 1;
            }
            .ui-ux:hover .descr p{
                opacity: 1;
            }
            .ui-ux:hover .descr a{
                opacity: 1;
            }
            .ui-ux:hover img{
                transform: scale(1.1) translateY(-20px);
                transition: all 0.3 ease-out;
                opacity: 0.3;
            }
            .descr{
                position: relative;
                left: 0; bottom: 0;
                width: 100%;
                padding: 10px;
                text-align: center;
                color: #fff;
                font-size: 15px;
            }
            .descr h3{
                font-weight: 700;
                font-size: 32px;
                margin: 0 0 20px;
                transform: translateY(30px);
                opacity: 0;
            }
            .descr a{
                color: #fff;
                background: #34aff3;
                display: inline-block;
                padding: 10px 25px;
                text-decoration: none;
                border-radius: 5px;
                opacity: 0;
            }
            .descr a:hover{
                background: #0e6290;
            }
            .descr p{
                /*transform: translateY(30px);*/
                opacity: 0;
            }
        </style>
    </head>
    <body>
        <header>
            <a href="main" class="logo">LOGO</a>
            <ul>
                <a href="profile">PROFILE</a>
                <a href="#" class="active">GALERRY</a>
                <a href="#">ABOUT</a>
                <a href="#">CREDIT</a>
                <a href="admin">ADMIN PAGE</a>
            </ul>
        </header>
        <section>
            <img src="/storage/app/public/img/stars.png" alt="img" id="stars">
            <img src="./mountains_behind.png" alt="img" id="mountains_behind">
            <h2 id="text">Main page</h2>
            <a href="#" class="btn" id="btn">Looking for more</a>
            <img src="./mountains_front.png" alt="img" id="mountains_front">
        </section>
        <div class="sec">
            <h3>What's new !!</h3>
            <p>Some thing verry special is comming in, prepare for it</p>
            <div class="main">
                <div class="ui-ux">
                    <img src="https://img.freepik.com/free-photo/mountain-journey_1163-3320.jpg?t=st=1647623186~exp=1647623786~hmac=a55857bb7926978fe71bedc0c556504aa747ae186fd9bdf9f8c635e44deccdca" alt="img">
                    <div class="descr">
                        <h3>Tieu_de</h3>
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