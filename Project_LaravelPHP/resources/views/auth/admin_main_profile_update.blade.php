<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin_main_profile_update.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
    <h2>Update user</h2>
    <form action="{{route('admin-update-progress')}}" method="POST">
        @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
        
        <input hidden name="id" value="{{$profile['id']}}">
        <div class="form__ChangeInf">
            <div class="form__Content">
                <div class="Title__Form">
                    User name
                </div>
                <input type="text" name="username" value="{{$profile['username']}}">
            </div>

            <div class="form__Content">
                <div class="Title__Form">
                Email
                </div>
                <input type="text" name="email" value="{{$profile['email']}}">
            </div>            
            <div class="form__Content">
                <div class="Title__Form">
                Social link
                </div>
                <input type="text" name="socialnetwork" value="{{$profile['socialnetwork']}}">
            </div>
            <div class="form__Content">
               <div class="Title__Form">
               Ages
                </div>
                <input type="text" name="ages" value="{{$profile['ages']}}">
                
            </div>
            <div class="form__Content">
                <div class="Title__Form">
                Types
                </div>
                <input type="text" name="type" value="{{$profile['type']}}">
            </div>    
            <div class="form__Content">
                <input type="submit" value="Submit">
            </div>                                   
        </div>
    </form>
</body>
</html>