<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title") </title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('public/backend') }}/{{ asset('public/backend') }}/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/pages/menu-search/css/component.css">

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/css/style.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/css/color/color-1.css" id="color" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/css/linearicons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend') }}/assets/css/jquery.mCustomScrollbar.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="{{ route('admin.dashboard') }}">
                            <img class="img-fluid" src="{{ asset('public/backend') }}/assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>

                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>

                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification lng-dropdown">
                                    <a href="#" id="dropdown-active-item">
                                        <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                    </a>
                                    <ul class="show-notification">
                                        <li>
                                            <a href="#" data-lng="en">
                                                <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-lng="en">
                                                <i class="flag-icon flag-icon-gb m-r-5"></i> Bangla
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="header-notification">
                                    <a href="#!" class="displayChatbox">
                                        <i class="ti-comments"></i>
                                        <span class="badge">9</span>
                                    </a>
                                </li>
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="{{ asset('public/backend') }}/assets/images/user.png" alt="User-Profile-Image">
                                        <span>{{ Auth::user()->name }}</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">
                                                <i class="ti-email"></i> My Messages
                                            </a>
                                        </li>

                                        <li>

                                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                <i class="ti-layout-sidebar-left"></i> {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>



            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" pcoded-header-position="relative">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40" src="{{ asset('public/backend') }}/assets/images/user.png" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>John Doe</span>
                                        <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" ">
                                    <a href="">
                                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-micon"></span>
                                    </a>
                                </li>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
                                        <span class="pcoded-mtext">Setting</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('setting.index') }}">
                                                <span class="pcoded-micon"><i class="ti-plus"></i></span>
                                                <span class="pcoded-mtext">Web Setting</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('slider.index') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Slider</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a href="{{ route('social.index') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Social Media</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">



                                @yield("content")




                            </div>
                            <!-- Warning Section Starts -->


                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>



    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/classie/classie.js"></script>
    <!-- c3 chart js -->
    <script src="{{ asset('public/backend') }}/bower_components/d3/d3.min.js"></script>
    <script src="{{ asset('public/backend') }}/bower_components/c3/c3.js"></script>
    <!-- google chart -->
    <script type="text/javascript" src="../../../www.gstatic.com/charts/loader.js"></script>
    <!-- echart js -->
    <script src="{{ asset('public/backend') }}/assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>

    <!--Data table-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('public/backend') }}/assets/pages/dashboard/ecommerce-dashboard.js"></script>
    <script type="text/javascript" src="{{ asset('public/backend') }}/assets/js/script.js"></script>
    <script src="{{ asset('public/backend') }}/assets/js/pcoded.min.js"></script>
    <script src="{{ asset('public/backend') }}/assets/js/demo-12.js"></script>
    <script src="{{ asset('public/backend') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('public/backend') }}/assets/js/jquery.mousewheel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('public/backend/sweetalert/sweetalert2@9.js')}}"></script>


    <script>
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

        $(document).ready(function() {
            $('#summernote').summernote();
        });

        $(document).ready(function() {
            $('#summernote2').summernote();
        });

    </script>
    <script>
        $(document).on('click', '#approve', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Approved this data!",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approved!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Approved!',
                        'Data has been approved.',
                        'success'
                    )
                }
            })
        });

    </script>
    <script>
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Approved!',
                        'Data has been Deleted.',
                        'success'
                    )
                }
            })
        });

    </script>

    @yield('customjs')

</body>

</html>
