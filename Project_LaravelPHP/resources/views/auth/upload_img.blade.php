<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload image</title>
    <link href="/css/upload_img.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body>
    <div id="container">
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div>

<form action="{{ route('upload-image') }}" method="post" enctype="multipart/form-data">
                @if(Session::get('success'))
                <h1 >{{Session::get('success')}}</h1>
                @endif
                @if(Session::get('fail'))
                <h1 >{{Session::get('fail')}}</h1>
                @endif
                @csrf
                <div class="Container">
                    <div class="Container__Childern">
                    <input type="file" name="file">
                    </div>
                    <div class="Container__Childern">
                    <div class="Title">
            Image date:
       </div>
        <input class="Input__Text" type="text" name="date" value="{{$date}}">
                        </div>
                        <div class="Container__Childern">
                        <div class="Title">
            Owner:
       </div>
        <input class="Input__Text" type="text" name="owner" placeholder="Người đăng">
                        </div>
                        <div class="Container__Childern">
                        <div class="Title">
            Title:
       </div>
        <input class="Input__Text" type="text" name="title" placeholder="Tieu de">
                        </div>
                        <div class="Container__Childern">
                        <div class="Title">
            Type:
       </div>
        <input class="Input__Text" type="text" name="type" placeholder="Chủ đề">
                        </div>
                        <div class="Container__Childern">
                        <input type="submit" value="Submit">
                </div>
                        </div>
    </div>
</form>

</div>
    </div>

</body>
</html>