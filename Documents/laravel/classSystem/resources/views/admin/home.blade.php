<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ホーム画面</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fe2ae2a4f6.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <header>
    @include('admin.header')
  </header>
  <div class="container mt-5">
      @if (session('login_success'))
        <div class="alert alert-success">
          {{session('login_success')}}
        </div>
      @endif
      <h3>17号館5階</h3>
      <div class="w-100 mt-5 container__rooms">
        <ul class="d-flex justify-content-around">
          <li class=""><a href="{{route('501')}}">501</a></li>
          <li class=""><a href="{{route('502')}}">502</a></li>
        </ul>      
        <ul class="d-flex justify-content-around">
          <li class=""><a href="{{route('503')}}">503</a></li>
          <li class=""><a href="{{route('504')}}">504</a></li>
        </ul>
    </div>
  </div>
</body>
</html>