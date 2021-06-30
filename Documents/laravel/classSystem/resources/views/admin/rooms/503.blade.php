<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>503教室</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/rooms.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fe2ae2a4f6.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <header>
    @include('admin.header')
  </header>
  <div class="container mt-5">
    <h3>503教室（座席表）</h3>
    <div class="container__seat mt-5">
      <img src="{{ asset('img/503.png') }}" alt="">
      <a class="btn btn-primary rounded-pill px-3 container__btn--enter">入室する</a>
    </div>
  </div>
</body>
</html>