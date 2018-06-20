<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112536242-1"></script>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Хлопкопром</title>



    <link rel="canonical" href="http://hlopkoprom.kz" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/remodal-default-theme.css">
    <link rel="stylesheet" href="/css/remodal.css">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/jquery.fullpage.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}"> -->
    <link rel="stylesheet" href="/css/newStyles.css">
    <link rel="stylesheet" href="/css/newMobile.css">
    
    <!-- mystyles -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/mystyles.css') }}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/mobile.css?'.time()) }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/ipadpro.css') }}">
    <meta name="apple-mobile-web-app-title" content="АХБК - хлопчатобумажный комбинат">
    <meta name="application-name" content="АХБК - хлопчатобумажный комбинат">

  	<style type="text/css">
  		@yield('styles')
  	</style>

    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>

    @yield('content')

@include('frontend.partials._menu')
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="js/jquery.fullpage.js"></script>
  <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="{{ asset('js/jquery.touchSwipe.js') }}"></script>
  <script src="{{ asset('js/scroll.js') }}"></script>
  <script src="{{ asset('js/remodal.min.js') }}"></script>

  <script type="text/javascript">
      $(document).ready(function() {
          @yield('scripts_body')
      });
  </script>
  <script src="js/script.js"></script>
  <script>
      /* Google Analytics (Do not copy this!!) */
  </script>
</body>
</html>