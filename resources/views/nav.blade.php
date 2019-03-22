    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                <img src="images/logo.png"></img>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                                        <li><a href="#service-page">Services</a></li>
                    
                    <!--<li><a href="#price-page">Pricing</a></li>-->
                    <li><a href="#feature-page">Why Us</a></li>

                    <li><a href="#team-page">Company</a></li>
                    {{-- <li><a href="#faq-page">FAQ</a></li>
                    <li><a href="#blog-page">Blog</a></li> --}}
                    <li><a href="#contact-page">Contact</a></li>
                    <li><a href="{{ route('frontend.appointment') }}" class="button white" style="color:white">Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->
