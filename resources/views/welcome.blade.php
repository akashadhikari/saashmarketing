@extends('main')

@section('content')

@include('nav')

@include('header')

@include('services')

@include('easytobuild')

@include('featurepage')

@include('teampage')


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