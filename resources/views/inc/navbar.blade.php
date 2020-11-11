<header class="header">
    <!--start navbar-->
    <nav class="navbar  navbar-expand-lg custom-nav-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="website/img/logo-color.png" alt="logo" class="img-fluid" style="height: 100px;width: 100px;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent"  style="background-color: white ;padding-right: 10px;">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="#" > Home</a>
                       
                    </li>
                    <li><a href="#aboutus">About Us</a></li>
                   
                            <li><a href="#ourvalues">Our Values </a></li>
                            <li><a href="#process"> Process</a></li>
                       
                  
                    <li><a href="#contactus">Contact Us</a></li>
                    <li><a href="{{ url('/login')}}" class="btn secondary-solid-btn check-btn">Login</a></li>
                    <li><a href="{{ url('/learner')}}" class="btn secondary-solid-btn check-btn">Get Start Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>