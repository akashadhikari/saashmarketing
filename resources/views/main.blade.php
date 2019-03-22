<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{URL::asset('images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{URL::asset('images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" />
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('css/normalize.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}" />
    <script src="{{URL::asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="https://saashmarketing.com/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://saashmarketing.com/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://saashmarketing.com/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://saashmarketing.com/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://saashmarketing.com/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://saashmarketing.com/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://saashmarketing.com/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://saashmarketing.com/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://saashmarketing.com/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://saashmarketing.com/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://saashmarketing.com/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://saashmarketing.com/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://saashmarketing.com/images/favicon-16x16.png">
    <link rel="manifest" href="https:://saashmarketing.com/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://saashmarketing.com/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">
    {{-- <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
   </div> --}}
   @yield('content') 
</body>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 10647052;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/10647052/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
</html>
