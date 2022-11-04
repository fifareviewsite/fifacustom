<!DOCTYPE HTML>
<html lang="ja">
<head>
@yield('head')
</head>
@yield('header')
<body>
<div class="contents">
    <div class="main">
        @yield('content')
    </div>
    <div class="sub">
        @yield('sub')
        @yield('pageSub')
    </div>
</div>
@yield('footer')
</body>
</html>