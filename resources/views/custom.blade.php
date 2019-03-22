@extends('layouts.app1')

 {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> --}}


<section class="section-padding overlay client-area overlay" id="client-page">
        <div class="container">
            <div class="navbar-header">
                
                
            </div>
            <div class="row text-center">
                <div class="col-xs-12">
                    <a href="/" class="navbar-brand logo">
                <h2>SAASH</h2>
                </a>
                </div>
            </div>
        </div>
    </section>
    @section('content')
    @include('partials.js1')
    <h2 style="color :blueviolet"> CUSTOM FORM </h2>
         
    {{-- <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Boots</span>
        </label> --}}
        {!! Form::open(array('url'=>'/custom','method'=>'post',)) !!}
 <h2> All Packages</h2>
<br>
{!! Form::label('monday', 'Monday') !!}
{!! Form::checkbox('workday[]', 'monday') !!}
<br>
<br>
{!! Form::label('Save', $attributes = ['class'=>'button']) !!}
{!! Form::close() !!}
<br>
<br>

{{-- {!! Form::submit('Save', $attributes = ['class'=>'button']) !!}
{!! Form::close() !!} --}}
{{-- 


        {{-- @foreach ($details as $detail)
            <span class="button-checkbox">
            <button type="button" class="btn" data-color="primary">{{$detail->plan}}: {{$detail->details}}</button>
                <input type="checkbox" class="hidden" />
            </span>
            <br>
                {!! Form::label('monday', 'Monday') !!}
                {!! Form::checkbox('workday[]', 'monday') !!}
            <br>
        @endforeach --}}
        
        
        