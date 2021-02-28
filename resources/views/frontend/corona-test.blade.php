@extends('frontend.layouts.master')
@section('title','Corona Test')
@section('content')

<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-6 col-lg-8 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pb-0 mb-3">
               <div class="card-header">
                   <h5 class="m-0">করোনার পরীক্ষা</h5>
               </div>
                <p class="p-3">স্বাগতম। এই টুলটির সাহায্যে আপনি কোভিড-১৯ বা নভেল করোনা ভাইরাস দ্বারা আক্রান্ত কি’না, তা নিজেই মূল্যায়ন করতে পারবেন। এমনকি আপনার ঝুঁকির মাত্রা ও করনীয় সম্পর্কেও জানতে পারবেন। এই সফটওয়্যারটি বিশ্ব স্বাস্থ্য সংস্থা এর গাইডলাইন মেনে তৈরি করা হয়েছে। তবে কোন অবস্থাতেই এই সফটওয়ার থেকে প্রাপ্ত ফলাফলকে অভিজ্ঞ ডাক্তার কর্তৃক স্বাস্থ্য পরামর্শ হিসেবে বিবেচনা করা যাবে না। সফটওয়ারে আপনার শেয়ার করা তথ্যের গোপনীয়তা বজায় রাখা হবে।</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form action="{{route('coronainfo.store')}}" method="post">
                            @csrf
                            <div class="card-body py-0">
                                <h5 class="text-light bg-success p-1">Step 1</h5>
                            </div>
                            <div class="card-body">
                                <div class="card border mb-3 card-body" style="background: #fafafa;">
                                    <div class="form-group">
                                        <label for="years">নাম:</label>
                                        <input type="text" name="name" placeholder="নাম" class="form-control" value="{{old('name')}}">
                                         <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="years">আপনার বয়স কত? :</label>
                                        <select id="years" name="age" class="form-control">
                                            <option value="0-20" @if (old('age') == "0-20") {{ 'selected' }} @endif>0-20</option>
                                            <option value="21-30" @if (old('age') == "21-30") {{ 'selected' }} @endif>21-30</option>
                                            
                                            <option value="31-40" @if (old('age') == "31-40") {{ 'selected' }} @endif>31-40</option>
                                            <option value="41-50" @if (old('age') == "41-50") {{ 'selected' }} @endif>41-50</option>
                                            <option value="51-65" @if (old('age') == "51-65") {{ 'selected' }} @endif>51-65</option>
                                            <option value="65+" @if (old('age') == "65+") {{ 'selected' }} @endif>65+</option>
                                        </select>
                                         <div style='color:red; padding: 0 5px;'>{{($errors->has('age'))?($errors->first('age')):''}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="years">ঠিকানা:</label>
                                        <input type="text" name="address" placeholder="ঠিকানা" class="form-control" value="{{old('address')}}">
                                         <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="years">মোবাইল:</label>
                                        <input type="text" name="mobile" placeholder="মোবাইল" class="form-control" value="{{old('mobile')}}">
                                         <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                                    </div>
                                </div>
                                    <h5 class="text-light bg-success p-1 mb-3">Step 2</h5>
                                <div class="card border mb-3 card-body" style="background: #fafafa;">

                                    <div class="form-group">
                                        <label>আপনার কি এই লক্ষণ গুলো রয়েছে? :</label><br>
                                        <div class="form-check form-check-inline">
                                            <input name="jor" class="form-check-input input-inharit" type="checkbox" id="aa" value="20" {{ (! empty(old('jor')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="aa">জ্বর</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sordi" class="form-check-input input-inharit" type="checkbox" id="e" value="2" {{ (! empty(old('sordi')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="e">সর্দি</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="kashi" class="form-check-input input-inharit" type="checkbox" id="b" value="10" {{ (! empty(old('kashi')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="b">শুকনা কাশি</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="golabetha" class="form-check-input input-inharit" type="checkbox" id="c" value="10" {{ (! empty(old('golabetha')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="c">গলা ব্যথা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="shaskosto" class="form-check-input input-inharit" type="checkbox" id="aaa" value="15" {{ (! empty(old('shaskosto')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="aaa">শ্বাসকষ্ট</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="bomi" class="form-check-input input-inharit" type="checkbox" id="aaaa" value="0" {{ (! empty(old('bomi')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="aaaa">বমি</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="bukebetha" class="form-check-input input-inharit" type="checkbox" id="aaaaa" value="0" {{ (! empty(old('bukebetha')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="aaaaa">বুকে ব্যথা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="sadnapawa" class="form-check-input input-inharit" type="checkbox" id="aaaaaa" value="10" {{ (! empty(old('sadnapawa')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="aaaaaa">স্বাদ না পাওয়া</label>
                                        </div>

                                    </div>
                                </div>
                                <h5 class="text-light bg-success p-1 mb-3">Step 3</h5>
                                <div class="card border mb-3 card-body" style="background: #fafafa;">
                                    <div class="form-group text-left">
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="checkbox" name="protibeshi_akranto" id="n" value="15" {{ (! empty(old('protibeshi_akranto')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="n">
                                                আপনার প্রতিবেশি বা এলাকার লোক কি করোনা ভাইরাসে আক্রান্ত ?
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="checkbox" name="poribar_akranto" id="o" value="35" {{ (! empty(old('poribar_akranto')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="o">
                                                আপনার পরিবারের কি কেউ করোনা ভাইরাসে আক্রান্ত ?
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="checkbox" name="poribar_jor_kashi" id="p" value="20" {{ (! empty(old('poribar_jor_kashi')) ? 'checked' : '') }}>
                                            <label class="form-check-label" for="p">
                                                আপনার পরিবারের কোন সদস্য কি জ্বর, কাশি বা শ্বাসকষ্টে ভূগছে ?
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <input type="submit" class="btn btn-success" value="Confirm">
                            </div>
                        </form>
                    </div>
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
