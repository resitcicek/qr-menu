<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Menü</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <link href="<?=env('URL')?>/Public/Template/asssets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=env('URL')?>/Public/Template/asssets/style.css" rel="stylesheet" />
    <script src="<?=env('URL')?>/Public/Template/asssets/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="head">
    <button class="btn btn-back" onclick="history.back()">< Geri</button> <a href="{{url('menu',['username'=>$user->username])}}" class="brand">{{$settings->name}}</a>
</div>
@yield('content')
<div class="footer">
    <div class="footer-lef"><a class="btn">İletişim & Wifi</a></div>
</div>

</body>
</html>