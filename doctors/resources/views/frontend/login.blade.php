@extends('frontend.layouts.master')
@section('title','Login')
@section('content')

<section class="login-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-page-form card card-body" style="border:1px solid #ddd;">
                    <h4 style="border-bottom: 1px solid #ddd;padding-bottom: 10px;margin-bottom: 30px;margin-top: 10px" class="text-center"><i class="fa fa-user mr-1" aria-hidden="true"></i>Login</h4>
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if(Session::get('message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div>
                            <li>{{Session::get('message') }}</li>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <label for="">Email</label>
                        <input class="form-control mb-3" type="email" name="email" placeholder="Enter your email">

                        <label for="">Password</label>
                        <input class="form-control mb-3" type="password" name="password" placeholder="Password">

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in mr-1" aria-hidden="true"></i>Login</button>
                            </div>
                        </div>
                        <div class="login-fp text-center mt-4">
                            <a class="text-muted" href="#">Forgot Password?</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
