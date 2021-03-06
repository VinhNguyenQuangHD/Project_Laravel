<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>
<body>
<header>
            <a href="main" class="logo">LOGO</a>
            <ul>
                <a href="/profile/{{$profile['id']}}">PROFILE</a>
                <a href="/galery/{{$profile['id']}}" class="active">GALLERY</a>
                <a href="/upload">ABOUT</a>
                <a href="#">CREDIT</a>
            </ul>
        </header>
</body>
</html>