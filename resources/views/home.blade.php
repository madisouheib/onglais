@extends('layouts.app')

@section('content')







<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->


<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 gradient-overlay full-screen"
             style="background: url('img/slider-img-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="hero-content-left text-white text-center">
                        <h1 class="text-white">Thank You {{ Auth::user()->name }} !</h1>
@if (Auth::user()->learner == 0)

    <p class="lead">Thanks a bunch for filling that out, it means a lot to us, just like you do! 
Our team informs you that the start of creating sessions will be during these days. 
don't forget to remember your login info.
we're pleased to have you among us..</p>

@else
 <p class="lead">Hey there, we are thrilled to welcome you here, thank you for your participation in our summer initiative.Our team informs you that the start of sessions reservation will be during the weekend .
don't forget to remember your login info .
we can't wait to meet you!..</p>



@endif
                    

                        <div class="mb-5">
                            <h5 class="mb-0 text-white"> <img src="{{ url('website/img/logo-color.png')}}" class="img-responsive" style="height: 200px;width: 190px;"> </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-5">
               
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

</div>
<!--body content wrap end-->


<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->









@endsection
