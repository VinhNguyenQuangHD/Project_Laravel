<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Detail</title>
</head>
<body>
    <input type="hidden" name="id" value="{{$image['id']}}">
    <div class="display">
        <h1>Hinh anh</h1>
        <img src="/storage/image/{{$image['image']}}" alt="hinh anh">
        <h3>{{$image['owner']}}</h3>
        <h4>{{$image['date']}}</h4>
    </div>
    <div class="comment-area">
        <h1>Binh luan</h1>
        <h4>Ten binh luan</h4>
        <input type="text" id="name">
        <h4>Noi dung</h4>
        <textarea name="comments" id="" cols="150" rows="10"></textarea>
        <button>Dang binh luan</button>

        <h1>Danh sach binh luan</h1>
        <form action="{{route('post-comment')}}" method="post">
            <textarea name="comment" id="" cols="30" rows="10">
                <?php
                    echo $current;
                ?>
            </textarea>
        </form>
    </div>
    
</body>
</html>