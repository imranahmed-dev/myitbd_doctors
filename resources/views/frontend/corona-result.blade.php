@extends('frontend.layouts.master')
@section('title','Corona Result')
@section('content')

<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-6 col-lg-8 p-0 mt-3 mb-2">
            <div class="card px-0 pb-0 mb-3">
                <div class="card-header">
                    <h5 class="m-0">করোনার ফলাফল @if($coronaresult) ({{$coronaresult->result}}%) @endif</h5>
                </div>
                <div class="card-body">
                   @if($coronaresult)
                   @if($coronaresult->result > 60)
                    <div class="alert alert-danger" role="alert">
                       
                        
                        <h4><i class="fa fa-exclamation-triangle"></i> আপনার করোনাই আক্রান্ত হওয়ার সম্ভাবনা খুবই বেশি। </h4>
                        <p>অতি শীঘ্রই নিকটস্থ পরীক্ষা কেন্দ্রে গিয়ে করোনা টেস্ট করুন। ফলাফল না পাওয়া পর্যন্ত হোম কোয়ারেন্টাইনে থাকুন।</p>
                        <ul>
                            <li>ঘরের বাইরে গেলে মাস্ক পরিধান করুন।</li>
                            <li>প্রয়োজন ছাড়া ঘড়ের বাইরে যাওয়া থেকে বিরত থাকুন।</li>
                            <li>নির্দিষ্ট দূরত্ব বজায় রাখুন।</li>
                        </ul>
                        
                    </div>
                    @endif
                    @if(($coronaresult->result >= 31) && ($coronaresult->result <= 60))
                    <div class="alert alert-warning" role="alert">
                       
                       
                        
                        <h4><i class="fa fa-exclamation-triangle"></i> আপনার করোনা ভাইরাসে আক্রান্ত হওয়ার সম্ভাবনা রয়েছে।</h4>
                        <p>অতি শীঘ্রই নিকটস্থ করোনা পরীক্ষা কেন্দ্রে গিয়ে টেস্ট করুন।</p>
                        <ul>
                            <li>ঘরের বাইরে গেলে মাস্ক পরিধান করুন।</li>
                            <li>প্রয়োজন ছাড়া ঘড়ের বাইরে যাওয়া থেকে বিরত থাকুন।</li>
                            <li>নির্দিষ্ট দূরত্ব বজায় রাখুন।</li>
                        </ul>
                        
                    </div>
                     @endif
                      @if($coronaresult->result <= 30)
                       
                       <div class="alert alert-success" role="alert">
                        
                        <h4><i class="fa fa-smile-o"></i> আপনার করোনাই আক্রান্ত হওয়ার সম্ভাবনা কম। </h4>
                        <p>স্বাস্থ্যের অবনতি হলে করোনা টেস্ট করুন।</p>
                        <ul>
                            <li>ঘরের বাইরে গেলে মাস্ক পরিধান করুন।</li>
                            <li>প্রয়োজন ছাড়া ঘড়ের বাইরে যাওয়া থেকে বিরত থাকুন।</li>
                            <li>নির্দিষ্ট দূরত্ব বজায় রাখুন।</li>
                        </ul>
                        
                    </div>
                    @endif
                   @else
                   <h5 class="text-center" style="font-size: 17px">কোনো ফলাফল পাওয়া যায়নি। </h5>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!--	start corona result section-->
<section class="corona-result py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 border">
                <p class="text-center pt-3">আপনার ঝুঁকি টেস্ট সম্পর্ন হয়েছে। ফলাফল দেখতে নিচের <span class="text-danger">ডাউনলোড</span> বাটনে ক্লিক করুন। ধন্যবাদ</p>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-danger m-3">ডাউনলোড</button>
            </div>

        </div>
    </div>
</section>
<!--	end corona result section-->

@endsection
