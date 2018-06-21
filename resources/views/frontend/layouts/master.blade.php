<!DOCTYPE html>
<html lang="ru">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Хлопкопром</title>

    <link rel="canonical" href="http://hlopkoprom.kz" />

    <!-- styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/remodal-default-theme.css">
    <link rel="stylesheet" href="/css/remodal.css">
    <link rel="stylesheet" href="/css/lightbox.min.css">


    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/jquery.fullpage.css">
    <link rel="stylesheet" type="text/css" href="/css/ipadpro.css">
    
    <link rel="stylesheet" href="/css/newStyles.css">
    <link rel="stylesheet" href="/css/newMobile.css">

    <link rel="shortcut icon" href="favicon.ico">
    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    @yield('head')
</head>
<body>

  @yield('content')

  @include('frontend.partials._menu')

  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery.maskedinput.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.touchSwipe.js"></script>
  <script src="/js/scroll.js"></script>
  <script src="/js/script.js"></script>
  @yield('scripts_body')

  
</body>
</html>