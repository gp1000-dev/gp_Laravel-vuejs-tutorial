<!doctype html>
<!-- config/app.phpの中のlocaleを指定する -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token（Ajax通信などで必要になる） -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- config/app.phpの中のnameを変更する -->
    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

    <!-- Styles（stylesheetの読み込み） -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!--コンポーネント呼び出し-->
    <header-component></header-component>
</div>
<!-- Scripts（Vue.jsの読み込み） -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
