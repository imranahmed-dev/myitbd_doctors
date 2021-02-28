<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - E-Doctor & Corona Predict</title>
    <link rel="stylesheet" href="{{asset('public/frontend')}}/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/imagehover.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/slick-theme.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/slick.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/uikit.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/custom.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/dataTable/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/dataTable/datatables-responsive/css/responsive.bootstrap4.min.css">

    <style>

    </style>

</head>

<body>
    <!-- START NAV-TOP SECTION -->
    <div class="top-nav-section" style="background: #e1f0f1;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-nav-content" style="margin-top:8px">
                        <div class="d-block d-lg-inline location">
                            <span class="icons"><i class="fa fa-map-marker"></i></span>
                            <h6 class=" d-inline">Panthapath, Dhaka</h6>
                            <span class="px-3 d-none d-lg-inline">|</span>
                        </div>
                        <div class="d-block d-lg-inline mail">
                            <span class="icons"><i class="fa fa-envelope-o"></i></span>
                            <h6 class="d-inline">info@edoctor.myitbd.com</h6>
                        </div>
                    </div>
                </div>
                <style>
                    .top-nav-log-reg {
                        text-align: right;
                    }

                </style>
                <div class="col-md-6">
                    <div class="top-nav-log-reg">
                        @if(Auth::check() && Auth::user()->role != 1)
                        <div class="login d-inline">
                            <a href="{{route('user.dashboard')}}"><button type="button" class="btn"><i class="fa fa-user"></i> {{Auth::user()->name}}</button></a>
                        </div>
                        <div class="login d-inline">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><button type="button" class="btn"><i class="fa fa-sign-out"></i> Logout</button></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        @else

                        <div class="register d-inline">
                            <a href="{{route('register.index')}}"><button type="button" class="btn btn-primary"><i class="fa fa-user-plus"></i> Registration</button></a>
                        </div>
                        <div class="login d-inline">
                            <a href="{{route('userlogin')}}"><button type="button" class="btn btn-dark"><i class="fa fa-sign-in"></i> login</button></a>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END  NAV-TOP SECTION -->
    <!-- START NAV SECTION -->


    <nav class="navbar navbar-dark navbar-expand-md text-light" uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up navbar-style">
        <div class="container">
            <a class="navbar-brand text-uppercase text-light" href="{{url('/')}}"> <img src="{{asset('public/frontend')}}/photos/Logo3.png" alt="Logo" height="30px" width="30px"> E-Doctor</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active px-2">
                        <a class="nav-link text-uppercase" href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item active px-2">
                        <a class="nav-link text-uppercase" href="{{route('doctors')}}">Doctors</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase" href="#">About Us</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase" href="#">Service</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase" href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase" href="{{route('contact')}}">Contact</a>
                    </li>

                    <li class="nav-item px-2">
                        <!-- <a class="nav-link text-uppercase bbb" href="registation.html">make appoint</a> -->
                        <a href="{{route('coronatest')}}" class="myButton "><i class="fa fa-check"></i> করোনা টেস্ট</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAV SECTION -->


    @yield('content')

    <!-- START FOOTER SECTION -->
    <footer class="footer-secton py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="content">
                        <h4 style="font-size: 20px;" class="text-uppercase text-light py-3">contect us</h4>
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-volume-control-phone"></i>
                            </div>
                            <div class="col-10">
                                <p class="text-light mb-0">+8801796722657</p>
                                <p class="text-light">+8801796722657</p>
                            </div>

                            <div class="col-2">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="col-10">
                                <p class="text-light mb-0">bokul66611@gmail.com</p>
                                <p class="text-light">alfahadhossain121@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="content-about">
                        <div class="row">
                            <div class="col-12">
                                <h4 style="font-size: 20px;" class="text-light text-uppercase py-3">about us</h4>
                                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum eum expedita dolore cum assumenda enim similique facilis beatae necessitatibus?</p>
                            </div>
                            <div class="col-12 footer-logo">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            <h4 style="font-size: 20px;" class="text-light text-uppercase py-3">important link</h4>

                            <p class="mb-1"><a style="color:#fff;text-decoration:none" href="#"><i class="fa fa-angle-double-right"></i> Doctors</a></p>
                            <p class="mb-1"><a style="color:#fff;text-decoration:none" href="#"><i class="fa fa-angle-double-right"></i> About Us</a></p>
                            <p class="mb-1"><a style="color:#fff;text-decoration:none" href="#"><i class="fa fa-angle-double-right"></i> Services</a></p>
                            <p class="mb-1"><a style="color:#fff;text-decoration:none" href="#"><i class="fa fa-angle-double-right"></i> Contact</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- END FOOTER SECTION -->

    <!--START COPYRIGHT SECTION -->
    <section class="copyright bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <p class="mb-0 text-light">Copyright &copy; All ights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COPYRIGHT SECTION -->


    <script src="{{asset('public/frontend')}}/js/jquery-3.5.1.min.js "></script>
    <script src="{{asset('public/frontend')}}/js/popper.min.js "></script>
    <script src="{{asset('public/frontend')}}/js/bootstrap.min.js "></script>
    <script src="{{asset('public/frontend')}}/js/uikit.min.js "></script>
    <script src="{{asset('public/frontend')}}/js/uikit-icons.min.js "></script>
    <script src="{{asset('public/frontend')}}/js/slick.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js " integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin=" anonymous "></script>
    <script src="{{asset('public/frontend')}}/js/main.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- DataTables -->
    <script src="{{asset('public/frontend')}}/dataTable/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/frontend')}}/dataTable/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('public/frontend')}}/dataTable/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('public/frontend')}}/dataTable/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('public/backend/sweetalert/sweetalert2@9.js')}}"></script>


    @yield('customjs')

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

    </script>
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": false,
            });
        });

    </script>
    <script>
        $(document).on('click', '#deleteData', function(e) {
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
                        'Deleted!',
                        'Data has been Deleted.',
                        'success'
                    )
                }
            })
        });

    </script>

    @yield('modal')

</body>

</html>
