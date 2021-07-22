<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($datas as $data => $value)
    <div id="maincounter-wrap" style="margin-top:15px">
    <h1>{{$data}}</h1>
    <div class="maincounter-number">
    <span>4,143,615</span>
    </div>
    </div>
    @endforeach

    
</body>
</html>