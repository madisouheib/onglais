<!DOCTYPE html>
<html lang="en">

<head>
    <title>ONGLAIS Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Admindek, Admindek bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('dash/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('dash/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('dash/assets/plugins/animation/css/animate.min.css') }}">
    <!-- notification css -->
    <link rel="stylesheet" href="{{ asset('dash/assets/plugins/notification/css/notification.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('dash/assets/css/style.css') }}">

</head>


<body class="layout-1" >
    <!-- [ Pre-loader ] start -->
</div>

       @include('dash.inc.navbar')
       @include('dash.inc.header')



     




    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                        <div id="app">
                                <!-- [ sample-page ] start -->
                          @yield('content')
                         </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->




    <script src="{{ asset('dash/assets/js/vendor-all.min.js') }}"></script>
    
     <script src="{{ asset('dash/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('dash/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
               <!-- dashboard-custom js -->

</body>
    </html>
