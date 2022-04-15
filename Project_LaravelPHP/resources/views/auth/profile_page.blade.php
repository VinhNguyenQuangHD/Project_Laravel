<!DOCTYPE html>
<html>
    <head>
    <title>Trang ca nhan</title>
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
            .about{
                width: 100%;
                padding: 100px 0;
                margin-top: 100px;
            }
            .about img{
                height: 430px;
                width: 430px;

            }
            .about_text{
                width: 550px;

            }
            .main{
                width: 1130px;
                max-width: 95%;
                margin: 0 auto;
                display: flex;
                align-items: center;
                justify-content: space-around;
            }
            .about_text h2{
                color: white;
                font-size: 55px;
                text-transform: capitalize;
                margin-bottom: 20px;
            }
            .about_text h5{
                color: #1FE590;
                letter-spacing: 2px;
                font-size: 22px;
                text-transform: capitalize;
                margin-bottom: 25px;
            }
            .about_text p{
                color: #fcfcfc;
                letter-spacing: 1px;
                margin-bottom: 15px;
            }
            button{
                background-color: #2992FE;
                color: white;
                text-decoration: none;
                border: 2px solid transparent;
                font-weight: bold;
                padding: 13px 30px;
                border-radius: 30px;
                transition: .4s;

            }
            button:hover{
                background-color: transparent;
                border: 2px solid #2992FE;
                cursor: pointer;
            }
            .favorite .title h1{
                margin-top: 10px;
                margin-left: 70px;
            }
    </style>
    </head>
    <body>
    <input hidden name="id" value="{{$profile['id']}}">
        @include('headerfooter.profile_header')
        <section class="about">
            <div class="main">
                <img src="https://as1.ftcdn.net/v2/jpg/02/69/35/10/1000_F_269351065_s8XkbMlVAj4leu14hjMhwJ6qaWaCT4yB.jpg" alt="Anh dai dien">
                <div class="about_text">
                    <h2>Ve ca nhan toi</h2>
                    <h5>{{$profile['username']}}</h5>
                    <p>Email: {{$profile['email']}}</p>
                    <p>Social network link: {{$profile['socialnetwork']}}</p>
                    <p>Ages: {{$profile['ages']}}</p>
                    <a href="/admin-update/{{$profile['id']}}">Update profile</a>
                </div>
            </div>
        </section>
    </body>
</html>