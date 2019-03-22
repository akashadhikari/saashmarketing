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

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('partials.head')
</head>


<body>


    <!--Mainmenu-area/-->


<!-- Content Wrapper. Contains page content -->
    <div>
        <!-- Main content -->
        <section class="content">
        

            <div class="row">
                <div class="col-lg-5">
                    
                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <p>{{ Session::get('message') }}</p>
                        </div>
                    @endif
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')
            
                </div>
            </div>
        </section>
    </div>
</div>

@include('footer')
@include('partials.javascripts')
</body>
</html>