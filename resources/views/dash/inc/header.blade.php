    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header" style="background-color: #6b0f1a;
        background-image: linear-gradient(315deg, #6b0f1a 0%, #b91372 74%);">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
    <a href="{{ url('/admin/home')}}" class="b-brand">
                   <div class="" style="background-color:white; border-radius:20%;">
                    <img src="/logo-color.png" class="img-responsive" style="height: 35px;width: 35px;">
                   </div>
                   <span class="b-title">ONGLAIS </span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
         
            </ul>
            <ul class="navbar-nav ml-auto">
               

                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="
                                 @if(Auth::user()->avatar == '')
                                  @if(Auth::user()->gendre == 'male')
  /dash/assets/images/user/avatar-2.jpg

                                  @else 
                                  /dash/assets/images/user/avatar-1.jpg

                                  @endif
                                
                                  @else 
                                  {{Auth::user()->avatar}}
                                  
                                  @endif
                                
                                
                                " class="img-radius" alt="User-Profile-Image">
                                <span>{{ Auth::user()->name }}</span>
                                
                                <a href="{{ url('/logout')}}" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                
                            <li><a href="{{ url('/admin/profile')}}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->