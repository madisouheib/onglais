<!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar brand-lightblue">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo" style="background-color: #6b0f1a;
background-image: linear-gradient(315deg, #6b0f1a 0%, #b91372 74%);
">
                <a href="{{ url('/admin')}}" class="b-brand" >
                    <div class="b-bg">
                     <img src="/logo-color.png" class="img-responsive" style="height: 35px;width: 35px;">
                    </div>
                    <span class="b-title">ONGLAIS </span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div" style="background-color: #000000;
background-image: linear-gradient(315deg, #000000 0%, #414141 74%);">
                <div class="layout1-nav">
                    <ul class="sidemenu nav flex-column" role="tablist" aria-orientation="vertical">
                        <li class="{{ Request::segment(2) === 'learners' || Request::segment(2) === 'teachers' || Request::segment(2) === 'home'    ? 'active' : null }}  "><a class="nav-link text-left" data-cont="navigation"><i class="fas fa-tv"></i></a></li>
                        <li class="{{ Request::segment(2) === 'sessions' || Request::segment(2) === 'listparticipants' || Request::segment(2) === 'myses'  || Request::segment(2) === 'teaching'   ? 'active' : null }}"><a class="nav-link text-left" data-cont="ui"><i class="fas fa-chalkboard-teacher"></i></a></li>
                        <li class=""><a class="nav-link text-left" data-cont="forms"><i class="fas fa-user-friends"></i></a></li>
                    
               
                        <li class=""><a class="nav-link text-left" data-cont="Pages"><i class="fas fa-file-alt"></i></a></li>
                        <li class=""><a class="nav-link text-left" data-cont="App"><i class="feather icon-tv"></i></a></li>
                        <li class=" {{ Request::segment(2) === 'levels' || Request::segment(2) === 'listlevels' ? 'active' : null }}   "><a class="nav-link text-left " data-cont="Extension"><i class="fas fa-filter"></i></a></li>
                  
                        <li class=""><a class="nav-link text-left" data-cont="Support"><i class="fas fa-hands-helping"></i></a></li>
                    </ul>
                    <a href="#!" class="toggle-sidemenu"><i class="feather icon-chevron-left"></i></a>
                    <div class="side-content">
                        <div class="sidelink navigation {{ Request::segment(2) === 'learners' || Request::segment(2) === 'teachers' || Request::segment(2) === 'home'    ? 'active' : null }} ">
                            <ul class="nav pcoded-inner-navbar">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Navigation</label>
                                </li>
                              <li data-username="landing page" class="nav-item"><a href="{{ url('/admin/home')}}" class="nav-link" ><span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span><span class="pcoded-mtext"> <i class=" fas fa-tachometer-alt "></i> Dashboard</span></a></li>
                              @if( Auth::user()->learner  == 3 )
                            <li data-username="landing page" class="nav-item {{ Request::segment(2) === 'learners' ? 'active' : null }}"><a href="{{ url('/admin/learners')}}" class="nav-link" ><span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span><span class="pcoded-mtext"> <i class=" fas fa-users-cog"></i> Learners</span></a></li>
                            <li data-username="landing page" class="nav-item {{ Request::segment(2) === 'teachers' ? 'active' : null }}"><a href=" {{ url('/admin/teachers')}}" class="nav-link" ><span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span><span class="pcoded-mtext"> <i class=" fas fa-users-cog"></i> Teachers</span></a></li>
@endif

                          
                            </ul>
                        </div>
                        <div class="sidelink ui {{ Request::segment(2) === 'listparticipants' || Request::segment(2) === 'sessions' || Request::segment(2) === 'myses'  || Request::segment(2) === 'teaching'    ? 'active' : null }}  ">
                            <ul class="nav pcoded-inner-navbar">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Sessions</label>
                                </li>
                                <li data-username="landing page" class="nav-item  {{ Request::segment(2) === 'teaching'  ? 'active' : null }}  "><a href="{{ url('/admin/teaching')}}" class="nav-link " ><span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span><span class="pcoded-mtext">Teaching </span></a></li>
                                        <li data-username="landing page" class="nav-item  {{ Request::segment(2) === 'myses'  ? 'active' : null }}  "><a href="{{ url('/admin/myses')}}" class="nav-link " ><span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span><span class="pcoded-mtext">My Sessions </span></a></li>
                                                     <li data-username="landing page" class="nav-item   {{ Request::segment(2) === 'sessions' || Request::segment(2) === 'listparticipants'  ? 'active' : null }} "><a href="{{ url('/admin/sessions')}}" class="nav-link  {{ Request::segment(2) === 'sessions' || Request::segment(2) === 'listparticipants'  ? 'active' : null }}" ><span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span><span class="pcoded-mtext">Reservation</span></a></li>
                      
                            </ul>
                        </div>
                        <div class="sidelink forms">
                            <ul class="nav pcoded-inner-navbar">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Exchange Conversation</label>
                                </li>
                               
                                        <li class=""><a href="{{ url('/admin/soon')}}" class="">Create </a></li>
                                        <li class=""><a href="{{ url('/admin/soon')}}" class="">Speakers list</a></li>
                               
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="sidelink table">
                            <ul class="nav pcoded-inner-navbar">
                                <li class="nav-item pcoded-menu-caption">
                                    <label> Files  </label>
                                </li>
                                 <li class=""><a href="{{ url('/admin/soon')}}" class="">Exercices </a></li>
                                        <li class=""><a href="{{ url('/admin/soon')}}" class="">External Links</a></li>
                            </ul>
                        </div>
             
                        <div class="sidelink Pages">
                            <ul class="nav pcoded-inner-navbar">
                               
                            <li class="nav-item pcoded-menu-caption">
                                    <label> Files  </label>
                                </li>
                                 <li class=""><a href="{{ url('/admin/soon')}}" class="">Exercises </a></li>
                                        <li class=""><a href="{{ url('/admin/soon')}}" class="">External Links</a></li>
                            </ul>
                        </div>
                        <div class="sidelink App">
                            <ul class="nav pcoded-inner-navbar">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Courses</label>
                                </li>
                                <li data-username="message" class="nav-item"><a href="{{ url('/admin/soon')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span class="pcoded-mtext">Vocabulary</span><span class="pcoded-badge label label-danger">Soon</span></a></li>
                                     <li data-username="message" class="nav-item"><a href="{{ url('/admin/soon')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span class="pcoded-mtext">Reading</span><span class="pcoded-badge label label-danger">Soon</span></a></li>
                                          <li data-username="message" class="nav-item"><a href="{{ url('/admin/soon')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span class="pcoded-mtext">Writing</span><span class="pcoded-badge label label-danger">Soon</span></a></li>
                         
                            </ul>
                        </div>
                        <div class="sidelink Extension {{ Request::segment(2) === 'levels' || Request::segment(2) === 'listlevels' ? 'active' : null }} ">
                            <ul class="nav pcoded-inner-navbar">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Level testing</label>
                                </li>
                             
                            <li class="{{ Request::segment(2) === 'levels' || Request::segment(2) === 'listlevels'  ? 'active' : null }} "><a href="{{ url('/admin/levels')}}" class="">Speaking </a></li>
                                        <li class=""><a href="{{ url('/admin/soon')}}" class=""> Writing <span class="pcoded-badge label label-danger">Soon</span> </a></li>
                                            <li class=""><a href="{{ url('/admin/soon')}}" class="">Reading <span class="pcoded-badge label label-danger">Soon</span> </a></li>
                                                <li class=""><a href="{{ url('/admin/soon')}}" class=""> Vocabulary<span class="pcoded-badge label label-danger">Soon</span> </a></li>
                                                 <li class=""><a href="{{ url('/admin/soon')}}" class=""> listening <span class="pcoded-badge label label-danger">Soon</span> </a></li>
                            </ul>
                        </div>
                        <div class="sidelink Support">
                            <ul class="nav pcoded-inner-navbar">
                                <li class="nav-item pcoded-menu-caption">
                                    <label>Support</label>
                                </li>
                                <li data-username="Documentation" class="nav-item"><a href="{{ url('/admin/soon')}}" class="nav-link" target="_blank"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Documentation</span></a></li>
                                <li data-username="Need Support" class="nav-item"><a href="{{ url('/admin/soon')}}" class="nav-link" target="_blank"><span class="pcoded-micon"><i class="feather icon-help-circle"></i></span><span class="pcoded-mtext">Need support ?</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
