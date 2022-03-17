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
            .container{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                padding: 30px;

            }
            .container .card{
                max-width: 500px;
                height: 190px;
                background: #fff;
                margin: 30px 10px;
                padding: 20px 15px; 
                display: flex;
                flex-direction: column;
                border-radius: 4px;
                box-shadow: 0 5px 202px rgba(0,0,0,0.5);
                transition: 0.3s ease-in-out;
            }
            .container .card:hover{
                height: 300px;

            }
            .container .card .imgDisplay{
                position: relative;
                width: 300px;
                height: 300px;
                top: -50px;
                left: 0px;
                z-index: 1;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0,2);
            }
            .container .card .imgDisplay img{
                max-width: 100%;
                border-radius: 4px;
            }
            .container .card .post_information{
                position: relative;
                margin-top: -140px;
                padding: 10px 15px;
                text-align-last: center;
                color: #111;
                visibility: hidden;
                opacity: 0;
                transition: 0.3 ease-in-out;
            } 
            .container .card:hover .post_information{
                visibility: visible;
                opacity: 1;
                margin-top: -40px;
                transition-delay: 0.3s;
            }
            .container .card .post_information p{
                color: #111;
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
            <div class="container">
                <div class="card">
                    <div class="imgDisplay">
                        <img src="https://img.freepik.com/free-photo/blue-morning-natural-mountains-bamboo_1417-32.jpg?t=st=1647524965~exp=1647525565~hmac=d8c409bb1a93d2d8c3fa233693ee4bba07352163ae7d87c9947fc336e6e37a1a" alt="hinh hien thi">
                    </div>
                    <div class="post_information">
                        <h2>#Ten anh</h2>
                        <p>#Tentacgia</p>
                        <a href="#">Watch more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgDisplay">
                        <img src="https://img.freepik.com/free-photo/blue-morning-natural-mountains-bamboo_1417-32.jpg?t=st=1647524965~exp=1647525565~hmac=d8c409bb1a93d2d8c3fa233693ee4bba07352163ae7d87c9947fc336e6e37a1a" alt="hinh hien thi">
                    </div>
                    <div class="post_information">
                        <h2>#Ten anh</h2>
                        <p>#Tentacgia</p>
                        <a href="#">Watch more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgDisplay">
                        <img src="https://img.freepik.com/free-photo/blue-morning-natural-mountains-bamboo_1417-32.jpg?t=st=1647524965~exp=1647525565~hmac=d8c409bb1a93d2d8c3fa233693ee4bba07352163ae7d87c9947fc336e6e37a1a" alt="hinh hien thi">
                    </div>
                    <div class="post_information">
                        <h2>#Ten anh</h2>
                        <p>#Tentacgia</p>
                        <a href="#">Watch more</a>
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