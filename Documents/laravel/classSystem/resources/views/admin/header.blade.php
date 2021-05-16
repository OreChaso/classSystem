<h1>K`sroom</h1>
<div class="header__user">
  <p>{{Auth::user()->user_no}}</p>
  <div class="header__select">
    <a id="header__select"><i class="fas fa-angle-down"></i></a>
    <a id="logout" class="logout" href="{{route('logout')}}">ログアウト</a>
  </div>
</div>
<script>
  const userSelect = document.querySelector('#header__select');
  
  let btnToggleclass = function(el) {
  el.classList.toggle('exit');
  }
  
  userSelect.addEventListener('click', function() {
    btnToggleclass(logout);
  }, false);
</script>