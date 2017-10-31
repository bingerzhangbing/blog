<!DOCTYPE html>
<html>
<head lang="zh">
  <meta charset="UTF-8"/>
  <title>ShiYanLou Blog</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no"/>
  <meta name="renderer" content="webkit"/>
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}"/>
  <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.1/css/amazeui.min.css"/>
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <script src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
  <script src="http://cdn.amazeui.org/amazeui/2.7.1/js/amazeui.min.js"></script>
</head>
<body>
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="/">ShiYanLou Blog</a>
    </h1>
    @include('layouts.nav')
  </div>
</header>

@yield('main')

@include('layouts.footer')


</body>
</html>