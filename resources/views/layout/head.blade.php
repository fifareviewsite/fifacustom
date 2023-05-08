@section('head')
<meta charset="UTF-8">
<title>@yield('title') | cly7796.net</title>
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="/css/layout.css" rel="stylesheet">
<link href="/css/mypage.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
@viteReactRefresh
@vite([
'resources/css/app.css',
'resources/scss/app.scss',
'resources/ts/components/select_top.tsx',
])
@endsection