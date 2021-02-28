@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
<!--START SEARCH SECTION -->
<section class="search-section py-5 gradient">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-uppercase"><span class="text-light">ডাক্তারের সিরিয়াল নেওয়ার অনলাইন প্লাটফর্ম </span> </h2>
                <p class="pb-4 ser-p text-light lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit suscipit beatae voluptate! Ipsa voluptatibus illo dolorem incidunt, impedit enim doloremque!</p>
                <div class="form-error">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin:0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <form action="{{route('doctor.search')}}" method="get" class="form-content form-block">
                    <div class="form-castom bg-dark p-4">

                        <select class="form-control input-castom" name="district">
                            <option value="">জেলা নির্বাচন</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Gazipur">Gazipur</option>
                        </select>

                        <select class="form-control input-castom my-2 my-lg-0" name="specialist">
                            <option value="">বিশেষঞ্জ ডাক্তার</option>
                            <option value="মনোরোগ বিশেষজ্ঞ">মনোরোগ বিশেষজ্ঞ</option>
                            <option value="হৃদরোগ বিশেষজ্ঞ">হৃদরোগ বিশেষজ্ঞ</option>
                            <option value="নাক, কান ও গলা বিশেষজ্ঞ">নাক, কান ও গলা বিশেষজ্ঞ</option>
                            <option value="স্নায়ু রোগ বিশেষজ্ঞ">স্নায়ু রোগ বিশেষজ্ঞ</option>
                            <option value="হাড় জোড়া, বাত ব্যাথা ও পঙ্গু রোগ বিশেষজ্ঞ">হাড় জোড়া, বাত ব্যাথা ও পঙ্গু রোগ বিশেষজ্ঞ</option>
                            <option value="কিডনীরোগ বিশেষজ্ঞ">কিডনীরোগ বিশেষজ্ঞ</option>
                            <option value="সার্জারি বিশেষজ্ঞ">সার্জারি বিশেষজ্ঞ</option>
                        </select>

                        <button type="submit" class="btn src-btn">খুঁজুন</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="doctor d-none d-lg-block">
        <img src="{{asset('public/frontend')}}/photos/doctor.png" alt="" class="img-fluid">
    </div>
</section>
<!--END SEARCH SECTION -->
<!--    start corona test section-->
<section class="corona-section py-5">
    <div class="container">
        <div class="row">
            <div class="d-none col-5 d-lg-block ">
                <div class="corona-bg">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="corona-text">
                    <p style="font-size:16px">স্বাগতম। এই টুলটির সাহায্যে আপনি কোভিড-১৯ বা নভেল করোনা ভাইরাস দ্বারা আক্রান্ত হবার ঝুঁকিতে আছেন কি’না, তা নিজেই মূল্যায়ন করতে পারবেন এবং ঝুঁকির মাত্রা ও করনীয় সম্পর্কেও জানতে পারবেন। তথ্য ও যোগাযোগ প্রযুক্তি বিভাগের উদ্যোগে এবং স্বাস্থ্য অধিদপ্তর এর বিশেষজ্ঞদের সহায়তায় এটি পরীক্ষামূলক ভাবে তৈরি করা হয়েছে। তবে, এই সফটওয়ার থেকে প্রাপ্ত ফলাফলকে অভিজ্ঞ ডাক্তার কর্তৃক স্বাস্থ্য পরামর্শ হিসেবে বিবেচনা করা যাবে না। সফটওয়্যারে আপনার প্রদান করা তথ্যের গোপনীয়তা বজায় রাখা হবে।</p>
                    <div class="corona-test-button pt-3">
                        <a href="step-form.html" class="btn btn-primary corona-button">করোনা টেস্ট</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   end corona test section-->

<!-- START SERVICE SECTION -->
<section class="service-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="service-head">
                    <h2 class="text-uppercase card-head">we give you <span>the best</span> </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore accusamus, quaerat laboriosam ipsam illo eveniet eum nam debitis excepturi voluptatibus
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> faster fast aid
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus <span><a href="#">see more</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> genaral medicin
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus <span><a href="#">see more</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> medical recharch
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus <span><a href="#">see more</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> intensive care
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus <span><a href="#">see more</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5 d-none d-lg-block">
                <div class="working-time py-4">
                    <div class="bg-color">
                        <h4 class="pb-2 pl-3 text-capitalize">out working time</h4>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>munday-friday</p>
                        </div>
                        <div class="col-6">
                            <p>08am:10pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>satarday</p>
                        </div>
                        <div class="col-6">
                            <p>07am:09pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>ambulance</p>
                        </div>
                        <div class="col-6">
                            <p>24/7</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>visitors</p>
                        </div>
                        <div class="col-6">
                            <p>11am-4pm</p>
                        </div>
                    </div>
                    <div class="bg-color">
                        <h4 class="pb-2 pl-3 text-capitalize">Discuse time</h4>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>monday-friday</p>
                        </div>
                        <div class="col-6">
                            <p>11am-08pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>satarday</p>
                        </div>
                        <div class="col-6">
                            <p>11am-4pm</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SERVICE SECTION -->
<!--    33333333333333333333333333-->
<!--start doctors area-->
<section class="doctors-area clearfix py-5 bg-light">
    <div class="container-fluid wow fadeInUp" data-wow-duration=".8s">
        <div class="row">
            <div class="col">
                <div class="section-header text-center mb-5 wow bounceIn">
                    <h2 class="section-title text-uppercase">doctor team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="doctors-box">

                    <i class="fa fa-angle-left prv ps-control"></i>
                    <i class="fa fa-angle-right nxt ps-control"></i>

                    <div class="doctors-slider-width">
                        <div class="doctors-slider doctors-slider-custom">
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{asset('public/frontend')}}/photos/444444.jpg" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{asset('public/frontend')}}/photos/444444.jpg" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{asset('public/frontend')}}/photos/444444.jpg" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{asset('public/frontend')}}/photos/444444.jpg" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{asset('public/frontend')}}/photos/444444.jpg" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{asset('public/frontend')}}/photos/444444.jpg" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{asset('public/frontend')}}/photos/444444.jpg" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-right pt-5 ">
                            <a href="glary-details.html"><button type="button" class="myButton text-uppercase">see more</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- START BOX SECTION -->
<section class="box-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content pr-2">
                    <h3 class="text-uppercase text-light">year of expriance</h3>
                    <h3 class="box-year">20+</h3>
                    <div class="box-icon">
                        <i class="fa fa-trophy"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content">
                    <h3 class="text-uppercase text-light">number of doctor</h3>
                    <h3 class="box-year">20+</h3>
                    <div class="box-icon box-icon-2">
                        <i class="fa fa-user-md"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content">
                    <h3 class="text-uppercase text-light">privus awards</h3>
                    <h3 class="box-year">20+</h3>
                    <div class="box-icon box-icon-3">
                        <i class="fa fa-shield"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content">
                    <h3 class="text-uppercase text-light">our happy clients</h3>
                    <h3 class="box-year">20+</h3>
                    <div class="box-icon box-icon-4">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BOX SECTION -->


@endsection
