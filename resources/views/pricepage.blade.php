<section class="price-area overlay section-padding" id="price-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>Pricing</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="price-table">
                    
                    <h3 class="text-uppercase price-title">Basic</h3>
                
                    <hr>
                    <ul class="list-unstyled">
                        <!-- <li><strong class="amount">$ <span class="big">20</span></strong>/Month</li> -->
                        @foreach($basics as $basic)
                        <li>{{$basic->details}}</li>
                        @endforeach
                        {{ Form::open(array('route' => 'plan','method' => 'POST')) }}
                        {!! Form::open(['route' => 'plan','data-parsley-validate' => '']) !!}
                            {{Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => 255))}}
                            
                            {{Form::submit('Enquiry', array('class' => 'button' , 'style' => 'margin-top: 20px'))}}
                        {{ Form::close() }}
                    </ul>
                    <hr>
                    <!-- <a href="{{ route('plan') }}" class="button">Purchase</a> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="price-table active">
                    <span class="price-info"><span class="ti-crown"></span></span>
                    <h3 class="text-uppercase price-title">STANDARD</h3>
                    <hr>
                    <ul class="list-unstyled">
<!--                         <li><strong class="amount">$ <span class="big">39</span></strong>/Month</li>
                         -->                        @foreach($standards as $standard)
                        <li>{{$standard->details}}</li>
                        @endforeach
                        {{ Form::open(array('route' => 'standardplan','method' => 'POST')) }}
                        {!! Form::open(['route' => 'plan','data-parsley-validate' => '']) !!}
                            {{Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => 255))}}
                            
                            {{Form::submit('Enquiry', array('class' => 'button' , 'style' => 'margin-top: 20px'))}}
                        {{ Form::close() }}
                    </ul>
                    <hr>
                    <!-- <a href="#" class="button">Purchase</a> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="price-table">
                    <h3 class="text-uppercase price-title">Premium</h3>
                    <hr>
                    <ul class="list-unstyled">
                        <!-- <li><strong class="amount">$ <span class="big">59</span></strong>/Month</li> -->
                        @foreach($premiums as $premium)
                        <li>{{$premium->details}}</li>
                        @endforeach
                        {{ Form::open(array('route' => 'premiumplan','method' => 'POST')) }}
                        {!! Form::open(['route' => 'plan','data-parsley-validate' => '']) !!}
                            {{Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => 255))}}
                            
                            {{Form::submit('Enquiry', array('class' => 'button' , 'style' => 'margin-top: 20px'))}}
                            {{ Form::close() }}
                    </ul>
                    <hr>
                    <!-- <a href="#" class="button">Purchase</a> -->
                </div>
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12">
            <div class="price-table" >
                <h3 class="text-uppercase price-title">Custom Packages</h3>
                <hr>
                <a href="/custom" class="button">Select Packages</a>
            </div>
        </div>  --}}
    </div>
</section>
