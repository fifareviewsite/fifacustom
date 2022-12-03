@section('header')
<header class="header">
    <div class="navtext-container">
      <div class="navtext">FIFA TACTICS COMMUNITY</div>
    </div>
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
    <ul class="menu" style="z-index:2147483647">
      <li class="menu_login">
        <div class="login_user">
            <div class="icon">
                <div class="login_icon">
                    <img src="{{asset('img/icon.png')}}">
                </div>
                <div class="login_username">
                    ロビン
                </div>
            </div>
            <div class="login_good_save">投稿数：9  いいね数：9
            </div>
            <div class="login_regist_date">登録日：2022/10/22
            </div>
    　  </div>
      </li>
      <li class="menu_about"><a href="#home">ABOUT</a></li>
      <li class="menu_mypage"><a href="/mypage">MYPAGE</a></li>
      <li class="menu_search"><a href="#projects">SEARCH</a></li>
      <li class="menu_logout"><a href="#contact">LOGOUT</a></li>
    </ul>

  </header>
@endsection