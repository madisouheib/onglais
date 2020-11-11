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

<!--header section start-->
@include('inc.navbar')
<!--header section end-->

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-equal-height ptb-70">
        <div class="hero-shape hero-shape-none-sm" style="background: url('website/img/bg-head.png')no-repeat top right"></div>
        <img src="{{ url('website/img/cta-2-path-shape.png')}}" alt="group shape" class="img-fluid group-shape-1">
        <img src="{{ url('website/img/cta-2-circle-shape.png')}}" alt="group shape" class="img-fluid group-shape-2">
        <img src="{{ url('website/img/cta-2-tringle-shape.png')}}" alt="group shape" class="img-fluid group-shape-3">
        <img src="{{ url('website/img/cta-2-tringle-shape.png')}}" alt="group shape" class="img-fluid group-shape-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="hero-slider-content pt-5">
                        <strong class="color-secondary"> Let’s talk Onglais </strong>
                        <h1> Designed to develop oral communication skills and increase fluency</h1>
                        <p class="lead"> Our courses bring learners into conversation and engaging activities that guarantee maximum talking time. We connect people with learning opportunities and creative ways. Regardless of whether you want to learn or to teach English, this is “the spot” to start. </p>

                        <div class="action-btns mt-3">
                            <a href="{{ url('/learner')}}" class="btn secondary-solid-btn">Get started now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

 
    <!--promo section end-->


    <!--about us section start-->
    <section id="aboutus" class="about-us-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="about-us-img">
                        <img src="{{ url('website/img/about.gif')}}" alt="about us" class="img-fluid rounded-circle" style="">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="about-us-content-wrap">
                        <strong class="color-secondary">About Us</strong>
                        <h3>Let’s talk Onglais </h3>
                        <span class="animate-border mb-4"></span>
                        <p>We are the place where you can find an unconventional and fun way of gaining proficiency in English with focus on vocabulary, pronunciation and spoken English. “let’s talk Onglais” follows a unique “learner-centered” approach to learning to build your English language skills and to better convey your ideas. With our courses, you will get better at communicating in casual and professional settings.  </p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong> Accessibility </strong> </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong> Community </strong> </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Teamwork </strong> </li>
                            <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Integrity</strong> </li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">550</h2>
                                    <strong>Total Students</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">20</h2>
                                    <strong>Total Teachers</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="counter-single">
                                    <h2 class="mb-0 color-secondary">300</h2>
                                    <strong>Total participants</strong>
                                </div>
                            </div>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="{{ url('/learner')}}" class="btn secondary-solid-btn mr-3">Get Started Now</a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

   <!--promo section start-->
    <section id="ourvalues" class="promo-section ptb-100">
        <div class="container">
                <h4 class="text-center"> OUR VALUES </h4>
            <div class="row justify-content-center">

                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-hand-point-up"></i>
                            <span class="number-bg">01</span>
                        </div>
                        <div class="promo-info">
                            <strong class="color-secondary"> Accessibility </strong>
                            <h4>We have made all   </h4>
                            <p> efforts to make Onglais easy to use and reachable for everyone; no matter what browser you choose to use, and whether or not you use any special equipment to access it. .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-medall"></i>
                            <span class="number-bg">02</span>
                        </div>
                        <div class="promo-info">
                            <strong class="color-secondary">Express oneself </strong>
                            <h4> Our mission </h4>
                            <p> is to dissolve any tension or nervousness that might be in any session and to make learners getting over their fear to talk and communicate .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-world"></i>
                            <span class="number-bg">03</span>
                        </div>
                        <div class="promo-info">
                            <strong class="color-secondary"> Together </strong>
                            <h4> We know that we are stronger </h4>
                            <p>When we are together and that every contribution counts, we act as a family, as friends and we trust each other.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


    <!--work process section start-->
    <section id="#process" class="work-process-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-heading text-center">
                        <strong class="color-secondary">Work Process</strong>
                        <h2>We follow Few Steps</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">Subscribe, book you course, join your class and enjoy learning with our teachers !
</p>
                    </div>
                </div>
            </div>
            <!-- ============ step 1 =========== -->
            <div class="row mt-5">
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-left">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0"  style="color:#fff;">01</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Register</h5>
                                <p> Apply by completing our form on the top of our website</p>
                            </div>
                        </div>
                        <div class="process-line-l"></div>
                    </div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-5 col-md-5 col-lg-5 process-none">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ step 2 =========== -->
            <div class="row">
                <div class="col-md-5 col-lg-5 process-none">
                    <div class="process-point-left"></div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-right">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number" style="background-color: #00aeff;">
                                    <strong>Step</strong>
                                    <h2 class="m-0"  style="color:#fff;">02</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Create Session </h5>
                                <p>Teachers will add classes.</p>
                            </div>
                        </div>
                        <div class="process-line-r"></div>
                    </div>
                </div>

            </div>
            <!-- ============ step 3 =========== -->
            <div class="row">
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-left">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number" style="background-color: #2dde98;">
                                    <strong>Step</strong>
                                    <h2 class="m-0" style="color:#fff;" >03</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Approvement of sessions</h5>
                                <p>Onglais staff will approve created sessions.</p>
                            </div>
                        </div>
                        <div class="process-line-l"></div>
                    </div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-5 col-lg-5 process-none">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ step 4 =========== -->
            <div class="row">
                <div class="col-md-5 col-lg-5 process-none">
                    <div class="process-point-left"></div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-right">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0"  style="color:#fff;">04</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Reserve a session</h5>
                                <p>Book/ Save a seat for a course. </p>
                            </div>
                        </div>
                        <div class="process-line-r"></div>
                    </div>
                </div>


            </div>
            <!-- ============ step 3 =========== -->
                 <div class="row">
                <div class="col-md-12 col-lg-5 process-width">
                    <div class="process-box process-left">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step-number">
                                    <strong>Step</strong>
                                    <h2 class="m-0"  style="color:#fff;">05</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Start learning</h5>
                                <p>Join your class and get started.</p>
                            </div>
                        </div>
                        <div class="process-line-l"></div>
                    </div>
                </div>
                <div class="col-md-2 process-none"></div>
                <div class="col-md-5 col-lg-5 process-none">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ -->
        </div>
    </section>
    <!--work process section end-->

    <!--call to action section start-->
    <section class="call-to-action-video">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="free-trial-image text-center">
                    <img src="img/cta-2-girl-img.jpg" alt="image" class="img-fluid">
                    <a href="https://www.youtube.com/" class="popup-youtube video-play-icon white-bip shadow"><span class="ti-control-play"></span> </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="free-trial-content text-white">
                    <h2 class="text-white">Best place to improve your speaking skills</h2>
                    <p> Best place to improve your speaking skills 
where  you will gain confidence to communicate effectively with audiences of any size. Onglais will help you to learn useful language for everyday use as well as for your professional career. With us, you will be able to develop your speaking skill and take your achievements to the next level.  </p>
                    <a href="{{ url('/learner')}}" class="btn primary-solid-btn mt-3">Start Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

    <!--our work or portfolio section start-->
   

    <!--client section start-->
    <div class="client-section ptb-100" style="background: url('website/img/client-bg.jpg')no-repeat center center / cover">
        <div class="container" id="contactus">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="client-heading-wrap">
                        <h3>Keep in Touch and follow us </h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="client-para">
                        <p>Connect with us on social media for the latest updates. </p>
                    </div>
                </div>
            </div>
            <!--clients logo start-->
            <div class="row align-items-center justify-content-center mb-4">
                <div class="col-md-10 col-lg-9">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap">
                        <div class="item single-client">
                            <img src="{{ url('website/img/groupfb.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ url('website/img/insta.png')}}" alt="client logo" class="client-img">
                        </div>
                     
                    
                   
                        <div class="item single-client">
                            <img src="{{ url('website/img/fb.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ url('website/img/linkedin.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{ url('website/img/youtube.png')}}" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section end-->

    <!--blog section start-->
   
    <!--team two section start-->
    

    <!--call to action section start-->
    <section class="call-to-action py-5">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Contact us </h3>
                        <p>for more information please contact us .</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn secondary-solid-btn">Contact  Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

</div>
<!--body content wrap end-->


<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <img src="website/img/logo-color.png" style="height: 100px;width: 100px;" alt="logo" class="mb-2">
                                <p>Continuity consistency inexpensive initiatives overseas oral exchange with effective change.</p>
                                <div class="social-nav mt-4">
                                    <ul class="list-unstyled social-list mb-0">
                                        <li class="list-inline-item tooltip-hover">
                                            <a href="#" class="rounded"><span class="ti-facebook"></span></a>
                                            <div class="tooltip-item">Facebook</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-twitter"></span></a>
                                            <div class="tooltip-item">Twitter</div>
                                        </li>
                                        <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                                class="ti-linkedin"></span></a>
                                            <div class="tooltip-item">Linkedin</div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Our Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Our Affiliates Program</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">View Our Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Check Our Careers</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Legal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="row footer-top-wrap mt-md-4 mt-sm-0 mt-lg-0">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">GET IN TOUCH</h4>
                                <ul class="get-in-touch-list">
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-map-marker-alt mr-2"></span> Broadway street, New York, USA
                                    </li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-envelope mr-2"></span> contact@onglais.com
                                    </li>
                                    <!--<li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span> (123) 456-7890 - (123) 456-7890</li>-->
                                </ul>
                                <form class="newsletter-form mt-3">
                                    <input type="text" class="input-newsletter" placeholder="Enter your email"
                                           name="EMAIL" required="" autocomplete="off">
                                    <button type="submit" class="disabled"
                                            style="pointer-events: all; cursor: pointer;"><i
                                            class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                        rights reserved by 
                        <a href="https://onglais.com" target="_blank">ONGLAIS</a></p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <ul class="list-inline policy-nav text-right social-list">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>



@endsection
