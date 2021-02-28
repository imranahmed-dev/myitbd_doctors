@extends('frontend.layouts.master')
@section('title','Gallery')
@section('content')

<!--START TEAM GLARY SECTION -->
<section class="team-glary-section py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="team-head py-3">
                    <h2 class="text-uppercase text-center">team glary</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nesciunt error ullam eaque quam et repudiandae quaerat cumque delectus dolorum!</p>
                </div>
            </div>
            <div class="col-12">
                <div class="gallery">
                    <div class="row border">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/doctor.png"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/doctor.png" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/doctor.png"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/doctor.png" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/doctor2.png"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/doctor2.png" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/444444.jpg"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/444444.jpg" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/doctor.png"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/doctor.png" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/doctor2.png"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/doctor2.png" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/444444.jpg"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/444444.jpg" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{asset('public/frontend')}}/photos/doctor.png"><img class="img-fluid" src="{{asset('public/frontend')}}/photos/doctor.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TEAM GLARY SECTION -->


@endsection
