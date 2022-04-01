<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin_main_profile_create.css">
    <title>Document</title>
</head>
<body>
    <div class="Menu__Choice"></div>
    <img src="https://images.pexels.com/photos/1603891/pexels-photo-1603891.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
    <form action="{{route('admin-create-progress')}}" method="POST">
        @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf

            <div class="Login__content">
            <h2>Create user</h2>
            <div class="Email__Login">
                User name
                <input type="text" class="Email__Text" placeholder="Nhập tên người dùng" name="username"></input>
            </div>
            <div class="Email__Login">
                Email 
                <input type="Email" class="Password__Text" placeholder="Nhập Email " name="email">
            </input>
            </div>
            <div class="Email__Login">
            Social link 
                <input type="text" class="Password__Text" placeholder="Mạng xã hội " name="socialnetwork">
            </input>
            </div>
            <div class="Email__Login">
            Ages
                <input type="text" class="Password__Text" placeholder="Tuổi " name="ages">
            </input>
            </div>
            <div class="Email__Login">
            Types
                <input type="text" class="Password__Text" placeholder="Loại " name="type">
            </input>
            </div>
            <div class="Submit__Login">
                <input type="submit" class="Submit__Login--Click" value="Tạo tài khoản" >
            </div>
        </div>
    </form>
</body>
</html>