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
<form class="border rounded bg-white form-login text-center" method="post" action="{{route('login')}}">
  @csrf
  <div class="d-inline-flex">
    <h1 class="h3 my-3 mx-2">ログイン</h1>
    <span style="font-size: 2em;" class="my-2"><i class="far fa-address-card"></i></span>
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
  @if (session('login_error'))
    <div class="alert alert-danger">
      {{session('login_error')}}
    </div>
  @endif
  @if (session('create_user'))
  <div class="alert alert-success">
    {{session('create_user')}}
  </div>
  @endif
  @if (session('logout'))
  <div class="alert alert-success">
    {{session('logout')}}
  </div>
  @endif
  <div class="mb-3 pt-3">
    <input type="text" class="form-control rounded-pill" name="user_no" value="" placeholder = "学籍番号">
    <div class="invalid-feedback"></div>
  </div>
  <div class="mb-3">
    <input type="password" class="form-control rounded-pill" name="password" placeholder = "パスワード">
    <div class="invalid-feedback"></div>
  </div>
  <button type="submit" class="btn btn-primary rounded-pill px-3 my-4">ログイン</button>
  <a class="btn btn-secondary rounded-pill px-3 my-4" href="{{route('createShow')}}">新規登録へ</a>
</form>
</body>
</html>