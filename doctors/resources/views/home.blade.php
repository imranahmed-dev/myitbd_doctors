@extends('layouts.app')
@section('content')


<div class="page-wrapper">
    <div class="page-header">
        <div class="page-header-title">
            <h4>Ecommerce Dashboard</h4>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Ecommerce Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-body">
        <div class="row">
            <!-- counter-card-1 start-->
            <div class="col-md-12 col-xl-4">
                <div class="card counter-card-1">
                    <div class="card-block-big">
                        <div>
                            <h3>4000</h3>
                            <p>Most Played Last Month
                                <span class="f-right text-primary">
                                    <i class="icofont icofont-arrow-up"></i>
                                    37.89%
                                </span>
                            </p>
                            <div class="progress ">
                                <div class="progress-bar progress-bar-striped progress-xs progress-bar-pink" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <i class="icofont icofont-comment"></i>
                    </div>
                </div>
            </div>
            <!-- counter-card-1 end-->
            <!-- counter-card-2 start -->
            <div class="col-md-6 col-xl-4">
                <div class="card counter-card-2">
                    <div class="card-block-big">
                        <div>
                            <h3>2500</h3>
                            <p>Coffee cups per day
                                <span class="f-right text-success">
                                    <i class="icofont icofont-arrow-up"></i>
                                    34.52%
                                </span>
                            </p>
                            <div class="progress ">
                                <div class="progress-bar progress-bar-striped progress-xs progress-bar-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <i class="icofont icofont-coffee-mug"></i>
                    </div>
                </div>
            </div>
            <!-- counter-card-2 end -->
            <!-- counter-card-3 start -->
            <div class="col-md-6 col-xl-4">
                <div class="card counter-card-3">
                    <div class="card-block-big">
                        <div>
                            <h3>800 Gb</h3>
                            <p>Average Monthly Uploads
                                <span class="f-right text-default">
                                    <i class="icofont icofont-arrow-down"></i>
                                    22.34%
                                </span>
                            </p>
                            <div class="progress ">
                                <div class="progress-bar progress-bar-striped progress-xs progress-bar-default" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <i class="icofont icofont-upload"></i>
                    </div>
                </div>
            </div>
            <!-- counter-card-3 end -->

        </div>
    </div>
</div>






@endsection
