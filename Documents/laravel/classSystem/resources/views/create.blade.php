<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/fe2ae2a4f6.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<form class="border rounded bg-white form-login text-center" method="post" action="{{route('userCreate')}}">
  @csrf
  <div class="d-inline-flex">
    <h1 class="h3 my-3 mx-2">新規登録</h1>
  </div>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <div class="mb-3 pt-3">
    <input type="text" class="form-control rounded-pill" name="user_no" value="" placeholder = "学籍番号">
    <div class="invalid-feedback"></div>
  </div>
  <div class="mb-3">
    <input type="password" class="form-control rounded-pill" name="password" placeholder ="パスワード">
    <div class="invalid-feedback"></div>
  </div>
  <button type="submit" class="btn btn-primary rounded-pill px-3 my-4">新規作成</button>
  <a type="submit" class="btn btn-secondary rounded-pill px-3 my-4" href="{{route('loginShow')}}">ログイン画面</a>
</form>
</body>
</html>