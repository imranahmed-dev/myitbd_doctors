@php
$url = Request::path();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $sitesetting->companyname }} | @yield("title")</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/custom.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset($sitesetting->logo) }}" alt="" width="100"></a>
        </div>

        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="{{route('view.cart')}}"><i class="fa fa-shopping-bag"></i> <span class="cartBody"></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span class="cartAmount"></span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language d-block mb-3">
                <img src="{{ asset('public/frontend') }}/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Bangla</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            @if(Auth::check() && Auth::user()->role == 2)
            <div class="header__top__right__auth mt-4 d-block">
                <a href="{{route('author.dashboard')}}"><i class="fa fa-user"></i>{{Auth::user()->name}}</a>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @else
            <div class="header__top__right__auth mr-2">
                <a href="{{route('customer.registration')}}"><i class="fa fa-user"></i> Registration</a>
            </div>
            <div class="header__top__right__auth">
                <a href="{{route('customer.login')}}"><i class="fa fa-sign-in"></i> Login</a>
            </div>
            @endif
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('products')}}">Shop</a></li>
                <li><a href="{{route('blogs')}}">Blog</a></li>
                <li><a href="{{route('contactus')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            @foreach($socialmedia as $data)
            <a href="{{ $data->link }}"><i class="{{ $data->icon }}"></i></a>
            @endforeach
        </div>

    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> {{ $sitesetting->email }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                @foreach($socialmedia as $data)
                                <a href="{{ $data->link }}"><i class="{{ $data->icon }}"></i></a>
                                @endforeach

                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('public/frontend') }}/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Bangla</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            @if(Auth::check() && Auth::user()->role == 2)
                            <div class="header__top__right__auth mr-2">
                                <a href="{{route('author.dashboard')}}"><i class="fa fa-user"></i>{{Auth::user()->name}}</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            @else
                            <div class="header__top__right__auth mr-2">
                                <a href="{{route('customer.registration')}}"><i class="fa fa-user"></i> Registration</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{route('customer.login')}}"><i class="fa fa-sign-in"></i> Login</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="{{ asset($sitesetting->logo) }}" alt="" width="100"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="@if($url == '/') active @endif"><a href="{{url('/')}}">Home</a></li>
                            <li class="@if($url == 'products') active @endif"><a href="{{route('products')}}">Shop</a></li>
                            <li class="@if($url == 'blogs') active @endif"><a href="{{route('blogs')}}">Blog</a></li>
                            <li class="@if($url == 'contact') active @endif"><a href="{{route('contactus')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                            <li><a href="{{route('view.cart')}}"><i class="fa fa-shopping-bag"></i> <span class="cartBody"></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span class="cartAmount"></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Hero Section Begin -->
    <section class="hero" style="@if($url != '/') padding-bottom: 10px; @endif">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul style="@if($url != '/') display:none;position: absolute; z-index: 1; background: #fff; width: 100%; @endif">

                            @foreach($categories as $category)


                            <li class="subcat-btn"><a href="{{ route('catproducts',$category->cat_slug) }}">{{ $category->cat_name }} <i class="fa fa-angle-right float-right"></i></a>
                                @php
                                $countsubcat = App\Models\Category::where('p_id',$category->id)->count();
                                @endphp
                                @if($countsubcat>0)

                                <div class="sub-cat">
                                    <a href="javascript:;">{{ $category->cat_name }}
                                    </a>

                                    @php
                                    $showsubcat = App\models\Category::where('p_id',$category->id)->get();
                                    @endphp
                                    @foreach($showsubcat as $sub_cat)
                                    <a href="{{ route('catproducts',$sub_cat->cat_slug) }}">{{ $sub_cat->cat_name }}</a>
                                    @endforeach

                                </div>
                                @endif


                            </li>

                            @endforeach




                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>{{ $sitesetting->hotlinenumber }}</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    @if($url == '/')
                    <div class="slider-section">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($sliders as $slider)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($sliders as $slider)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{asset($slider->image)}}" alt="Image">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="mb-3">{{$slider->title}}</h5>
                                        <p>{{$slider->description}}</p>
                                        <a href="{{$slider->link}}">Shop Now</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    @yield('content')



    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ url('/') }}"><img src="{{ asset($sitesetting->footerlogo) }}" alt="" width="100"></a>
                        </div>
                        <ul>
                            <li>Address: {{ $sitesetting->localaddress }}</li>
                            <li>Address: {{ $sitesetting->stateaddress }}</li>
                            <li>Mobile: {{ $sitesetting->mobile }}</li>
                            <li>Email: {{ $sitesetting->email }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>

                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="{{route('contactus')}}">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">




                            @foreach($socialmedia as $data)
                            <a href="{{ $data->link }}"><i class="{{ $data->icon }}"></i></a>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>

                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | Agrofresh <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://softech.com.bd/" target="_blank">SOFTECH BD</a>

                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="{{ asset('public/frontend') }}/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('public/frontend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('public/frontend') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>

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
        //Cart Qty
        function loadQty() {
            $.ajax({
                url: "{{ url('/cart/get') }}",
                success: function(data) {
                    $('.cartBody').html(data);
                }
            })
        }
        loadQty();

        //Cartable Product
        function loadCartableProduct() {
            $.ajax({
                url: "{{ url('/cartable/product') }}",
                success: function(data) {
                    $('#cartableProduct').html(data);
                }
            })
        }
        loadCartableProduct();

        //Cart Total
        function loadCartTotal() {
            $.ajax({
                url: "{{ url('/cart/total') }}",
                success: function(data) {
                    $('#cartTotal').html(data);
                }
            })
        }
        loadCartTotal();

        //Cart Total
        function loadCartAmount() {
            $.ajax({
                url: "{{ url('/cart/amount') }}",
                success: function(data) {
                    $('.cartAmount').html(data);
                }
            })
        }
        loadCartAmount();

    </script>


    <script>
        //Add to cart
        $(document).on('click', '.addcart', function(e) {
            e.preventDefault();
            var id = $(this).attr('id');

            $.ajax({
                url: "{{ url('product/add_to_cart') }}/" + id,
                method: "GET",
                dataType: "JSON",

                beforeSend: function() {
                    $(".loading").fadeIn();
                },
                success: function(data) {
                    loadQty();
                    loadCartableProduct();
                    loadCartTotal();
                    loadCartAmount();
                    toastr.success('Successfully Added To Cart !', 'Success', {
                        timeOut: 3000
                    });
                    /*window.location.reload();*/
                },
                complete: function() {
                    $(".loading").fadeOut();
                },
            });
        });

    </script>

    <script>
        @foreach(Cart::content() as $cartproduct)
        //Update cart
        $(document).on('click', '.cartupdate_{{$cartproduct->rowId}}', function() {
            var id = $(this).attr('id');
            var qty = $('#qtyval_{{$cartproduct->rowId}}').val();
            if (qty < 1) {
                toastr.error('', 'Please Enter Valid Quantity !', {
                    timeOut: 3000
                });
                return false;
            } else {
                $.ajax({
                    url: "{{ url('/cart/update') }}/",
                    data: {
                        id: id,
                        qty: qty
                    },
                    method: "GET",
                    dataType: "JSON",

                    beforeSend: function() {
                        $(".loading").fadeIn();
                    },
                    success: function(data) {
                        loadQty();
                        loadCartableProduct();
                        loadCartTotal();
                        loadCartAmount();
                        toastr.success('Successfully Cart Updated !', 'Success', {
                            timeOut: 3000
                        });
                    },
                    complete: function() {
                        $(".loading").fadeOut();
                    },
                });
            }

        });
        @endforeach

    </script>

    <script>
        $(document).on('click', '.cartdelete', function(e) {
            e.preventDefault();
            var id = $(this).attr('id');

            $.ajax({
                url: "{{ url('cart/item/delete') }}/" + id,
                method: "GET",
                dataType: "JSON",
                type: "DELETE",

                beforeSend: function() {
                    $(".loading").fadeIn();
                },
                success: function(data) {
                    loadQty();
                    loadCartableProduct();
                    loadCartTotal();
                    loadCartAmount();
                    toastr.info('Successfully Removed Cart Product !', 'Removed', {
                        timeOut: 3000
                    });
                },
                complete: function() {
                    $(".loading").fadeOut();
                },
            });
        });

    </script>

    <script>
        //Add to cart
        $(document).on('click', '.singlecart', function(e) {
            e.preventDefault();
            var id = $(this).attr('id');
            var qty = $('#singleqty').val();
            if (qty < 1) {
                toastr.error('', 'Please Enter Valid Quantity !', {
                    timeOut: 3000
                });
                return false;
            } else {

            $.ajax({
                url: "{{ url('product/singlecart') }}/" + id,
                method: "GET",
                dataType: "JSON",
                data: {
                    qty:qty,
                },

                beforeSend: function() {
                    $(".loading").fadeIn();
                },
                success: function(data) {
                    loadQty();
                    loadCartableProduct();
                    loadCartTotal();
                    loadCartAmount();
                    toastr.success('Successfully Added To Cart !', 'Success', {
                        timeOut: 3000
                    });
                    /*window.location.reload();*/
                },
                complete: function() {
                    $(".loading").fadeOut();
                },
                });
            }
        });

    </script>

</body>

</html>
