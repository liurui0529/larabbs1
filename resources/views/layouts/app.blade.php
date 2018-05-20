<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width;initial-scale=1">
    <!-- csrf令牌 -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','larabbs社区')-laravel进阶教程</title>

    <!-- CSS文件引入 -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include("layouts._header")

        <div class="container">
            @yield("content")
        </div>

        @include("layouts._footer")
    </div>

    <!-- JS脚本代码 -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>