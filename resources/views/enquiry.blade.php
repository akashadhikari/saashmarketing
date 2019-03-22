@section('content')
<div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
@include('nav')

@extends('main')

 <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>Hello {{ $email }} </h2>
                    <p>The email has been successfully sent with the price of the package You want.</p>
                    
                </div>
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="images/mobilescreen1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/mobilescreen1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/mobilescreen1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/mobilescreen1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/mobilescreen1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->



@include('services')

@include('pricepage')

@include('easytobuild')

@include('featurepage')

@include('teampage')








  {{-- @include('faq') --}}




{{-- @include('clientpage') --}}



{{-- @include('blog') --}}



  @include('footer')


    <!--Vendor-JS-->
    <script src="{{URL::asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/contact-form.js')}}"></script>
    <script src="{{URL::asset('js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{URL::asset('js/scrollUp.min.js')}}"></script>
    <script src="{{URL::asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{URL::asset('js/main.js')}}"></script>
@endsection