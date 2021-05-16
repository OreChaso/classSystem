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
      <div class="row row-cols-2 mt-5">
          <div class="col" style="cursor: pointer;">
            <ul style="list-style: none; border:1px solid #333; padding: 10px 0; border-radius: 10px;"> 
              <li style="font-size: 22px; margin: 0 20px"><a href="{{route('502')}}">502</a></li>
            </ul>
          </div>
          <div class="col" style="cursor: pointer;">
            <ul style="list-style: none; border:1px solid #333; padding: 10px 0; border-radius: 10px;"> 
              <li style="font-size: 22px; margin: 0 20px"><a href="{{route('503')}}">503</a></li>
            </ul>
          </div>
          <div class="col" style="cursor: pointer;">
            <ul style="list-style: none; border:1px solid #333; padding: 10px 0; border-radius: 10px;"> 
              <li style="font-size: 22px; margin: 0 20px"><a href="{{route('504')}}">504</a></li>
            </ul>
          </div>
      </div>
  </div>
</body>
</html>