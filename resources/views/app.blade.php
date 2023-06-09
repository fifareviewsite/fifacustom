<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    @viteReactRefresh
@vite([
'resources/css/app.css',
'resources/scss/app.scss',
'resources/ts/components/Home.tsx',
'resources/ts/components/PageA.tsx',
'resources/ts/components/Router.tsx',
])
</head>
<body>
<div>
	<div id="app"></div>
</div>
</body>
</html>