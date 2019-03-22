@extends('main')

@section('content')

@include('nav')

<section class="section-padding overlay client-area overlay">
        <div class="container">
            <div class="navbar-header">
                
                
            </div>
            <div class="row text-center">
                <div class="col-xs-12">
                    <a href="/" class="navbar-brand logo">
                        <img src="images/logo.png">
                   </a>
                </div>
            </div>
        </div>
</section>

<section class="content-area" style="margin-top:20px">
        <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success')}}
                        </div>
                    @endif
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-center">Book an appointment</h4>
                                </div>
                                <div class="panel-body">
                                  <form action="{{ route('frontend.appointment') }}" method="POST">
                                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                                    <label for="">First Name</label>
                                                    <input type="text" name="first_name" class="form-control">
                                                    @if($errors->has('first_name'))
                                                        <span class="help-block">
                                                            {{ $errors->first('first_name') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                                        <label for="">Last Name</label>
                                                        <input type="text" name="last_name" class="form-control">
                                                        @if($errors->has('last_name'))
                                                            <span class="help-block">
                                                                {{ $errors->first('last_name') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                            <label for="">Phone</label>
                                                            <input type="text" name="phone" class="form-control">
                                                        @if($errors->has('phone'))
                                                            <span class="help-block">
                                                                {{ $errors->first('phone') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <label for="">Email</label>
                                                            <input type="text" name="email" class="form-control">
                                                        @if($errors->has('email'))
                                                            <span class="help-block">
                                                                {{ $errors->first('email') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                                                            <label for="">Start Time</label>
                                                            <input type="text" name="start_time" id="start-time" class="form-control">
                                                            @if($errors->has('start_time'))
                                                                <span class="help-block">
                                                                    {{ $errors->first('start_time') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    <div class="form-group{{ $errors->has('finish_time') ? ' has-error' : '' }}">
                                                            <label for="">End Time</label>
                                                            <input type="text" name="finish_time" id="finish-time" class="form-control">
                                                            @if($errors->has('finish_time'))
                                                                <span class="help-block">
                                                                    {{ $errors->first('finish_time') }}
                                                                </span>
                                                            @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
                                                            <label for="">Which services are you most interested in?</label>
                                                            <div class="col-md-12" style="padding-left:20px;">
                                                                    @foreach ($services as $service)
                                                                    <div class="radio">
                                                                    <input type="radio" name="service_id" id="sr{{ $service->id }}" value="{{ $service->id }}">
                                                                            <label for="sr{{$service->id }}">{{ $service->title }}</label>
                                                                        </div>
                                                                    @endforeach
                                                            </div>
                                                            @if($errors->has('service'))
                                                                <span class="help-block">
                                                                  Please choose option from services above.
                                                                </span>
                                                            @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('budget') ? ' has-error' : '' }}">
                                                            <label for="">How much capital can you invest upfront if we work with you?</label>
                                                            <input type="text" class="form-control" name="budget">
                                                            @if($errors->has('budget'))
                                                            <span class="help-block">
                                                                {{ $errors->first('budget') }}
                                                            </span>
                                                        @endif
                                                        </div>
                                                    <div class="form-group">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                                    </div>
                                       </form>
                                </div>
                        </div>
                        
                </div>
        </div>
</section>
        

<!--Vendor-JS-->
<script src="{{URL::asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
<!--Plugin-JS-->
<script src="{{URL::asset('js/scrollUp.min.js')}}"></script>
<!--Main-active-JS-->

    <script>
        $(function(){
            $('.mainmenu-area').remove(); 
        });
    </script>
    <script src="{{ asset('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
            $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('#start-time, #finish-time').datetimepicker({
                format: "{{ config('app.datetime_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
            });
            
        });
</script>
@endsection