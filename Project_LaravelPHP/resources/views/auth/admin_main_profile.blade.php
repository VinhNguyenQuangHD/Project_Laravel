<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cua quan tri vien</title>
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
                z-index: 10;
            }
            .container{
                z-index: 20;
            }
            table{
                border-spacing: 0px;
                width: 100%;
                z-index: 15;
            }

            .table td, .table th{
                padding: .75em;
                vertical-align: top;
                text-align: center;
                border-top: 1px solid var(--border);
            }

            .table td > a.btn{
                padding: .3em 1em;
                font-size: 1.1em;
                margin: 0 .2em;
            }


            .table tr:hover td > a{
                box-shadow: none;
            }

            .table .thead-dark th{
                color: #fff;
                background-color: var(--dark) ;
                border-color: #32383e;
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
        <div class="container">
            <div class="box-nav d-flex justify-between">
                <a href="admin-create" class="border-shadow">
                    <span class="text-gradient">New User <i class="fas fa-user"></i></span>
                </a>
            </div>
            <form action="" method="">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Social Link</th>
                            <th>Ages</th>
                            <th>Types</th>
                            <th>Update/Delete</th>
                        </tr>
                    </thead>
                    @foreach($profiles as $value)
                        <tbody>
                            <th>{{$value['username']}}</th>
                            <th>{{$value['email']}}</th>
                            <th>{{$value['socialnetwork']}}</th>
                            <th>{{$value['ages']}}</th>
                            <th>{{$value['type']}}</th>
                            <th></th>
                        </tbody>
                    @endforeach

                    <tbody>
                    
                    </tbody>
                </table>
            </form>
        </div>
    
    </section>
        
</body>
</html>