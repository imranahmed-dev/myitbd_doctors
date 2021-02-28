@extends('frontend.layouts.master')
@section('title','Corona Test')
@section('content')

<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <p class="p-3">স্বাগতম। এই টুলটির সাহায্যে আপনি কোভিড-১৯ বা নভেল করোনা ভাইরাস দ্বারা আক্রান্ত কি’না, তা নিজেই মূল্যায়ন করতে পারবেন। এমনকি আপনার ঝুঁকির মাত্রা ও করনীয় সম্পর্কেও জানতে পারবেন। এই সফটওয়্যারটি বিশ্ব স্বাস্থ্য সংস্থা এর গাইডলাইন মেনে তৈরি করা হয়েছে। তবে কোন অবস্থাতেই এই সফটওয়ার থেকে প্রাপ্ত ফলাফলকে অভিজ্ঞ ডাক্তার কর্তৃক স্বাস্থ্য পরামর্শ হিসেবে বিবেচনা করা যাবে না। সফটওয়ারে আপনার শেয়ার করা তথ্যের গোপনীয়তা বজায় রাখা হবে।</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>First Step</strong></li>
                                <li id="personal"><strong>Secont Step</strong></li>
                                <li id="payment"><strong>Final Step</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">

                                    <div class="form-group border p-3">
                                        <label for="years">আপনার বয়স কত? :</label>
                                        <select id="years" class="form-control">
                                            <option value="volvo">0-20</option>
                                            <option value="saab">21-30</option>
                                            <option value="opel">31-40</option>
                                            <option value="audi">41-50</option>
                                            <option value="audi">51-65</option>
                                            <option value="audi">65+</option>
                                        </select>
                                    </div>

                                    <div class="form-group border p-3">
                                        <label for="gender">আপনার লিঙ্গ নির্বাচন করুন :</label>
                                        <select id="gender" class="form-control">
                                            <option value="volvo">পুরুষ</option>
                                            <option value="volvo">নারী</option>
                                            <option value="volvo">অন্যান্য</option>
                                        </select>
                                    </div>

                                    <div class="form-group border p-3">
                                        <label for="light">আপনার শরীরের বর্তমান তাপমাত্রা কত? (ফারেনহাইটে উল্লেখ করুন) :</label>
                                        <select id="light" class="form-control">
                                            <option value="volvo">শরীরের তাপমাত্রা স্বাভাবিক আছে 96°F-98.6°F</option>
                                            <option value="volvo">জ্বর 98.6°F-102°F</option>
                                            <option value="volvo">অনেক জ্বর >102°F</option>
                                            <option value="volvo">জানি না</option>
                                        </select>
                                    </div>



                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">

                                    <div class="form-group border p-3">
                                        <label>আপনার কি এই লক্ষণ গুলো রয়েছে? :</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="a" value="option1">
                                            <label class="form-check-label" for="a">শ্বাসকষ্ট</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="b" value="option1">
                                            <label class="form-check-label" for="b">শুকনা কাশি</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="c" value="option1">
                                            <label class="form-check-label" for="c">গলা ব্যথা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="d" value="option1">
                                            <label class="form-check-label" for="d">অতি দুর্বলতা (যেমনঃ বাথরুমে যেতে অন্যের সাহায্যের প্রয়োজন হয় এমন)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="e" value="option1">
                                            <label class="form-check-label" for="e">সর্দি বা নাক দিয়ে পানি পড়া</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="f" value="option1">
                                            <label class="form-check-label" for="f">একটিও না</label>
                                        </div>
                                    </div>

                                    <div class="form-group border p-3">
                                        <label>অতিরিক্ত কি কি লক্ষণ আপনার রয়েছে? :</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="g" value="option1">
                                            <label class="form-check-label" for="g">পেট ব্যাথা, বমি বা পাতলা পায়খানা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="h" value="option1">
                                            <label class="form-check-label" for="h">মাংশপেশি তে ব্যাথা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="i" value="option1">
                                            <label class="form-check-label" for="i">স্বাদ না পাওয়া</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="j" value="option1">
                                            <label class="form-check-label" for="j">নাকে গন্ধ না পাওয়া</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="k" value="option1">
                                            <label class="form-check-label" for="k">চোখ চুলকানো বা লাল হয়ে যাওয়া</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="l" value="option1">
                                            <label class="form-check-label" for="l">তন্দ্রাচ্ছন্নভাব</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="m" value="option1">
                                            <label class="form-check-label" for="m">একটিও না</label>
                                        </div>
                                    </div>

                                    <div class="form-group border p-3">
                                        <label for="">আপনার ভ্রমণ এর বিস্তারিত তথ্য দিন :</label>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="n" value="option1" checked>
                                            <label class="form-check-label" for="n">
                                                গত ১৪ দিনের মধ্যে কোথাও ভ্রমণ করি নাই অথবা করোনা আক্রান্ত কিংবা জ্বর, কাশি, শ্বাসকষ্ট আছে এমন কারো কাছাকাছি যাই নাই
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="o" value="option1" checked>
                                            <label class="form-check-label" for="o">
                                                গত ১৪ দিনের মধ্যে জ্বর, কাশি, শ্বাসকষ্ট আছে এমন কারো সংস্পর্শে গিয়েছিলাম (যেমনঃ পরিবার সদস্য / সহকর্মী)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="p" value="option1" checked>
                                            <label class="form-check-label" for="p">
                                                গত ১৪ দিনের মধ্যে বিদেশ থেকে ফিরেছে এমন কারো সংস্পর্শে গিয়েছিলাম
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="q" value="option1" checked>
                                            <label class="form-check-label" for="q">
                                                গত ১৪ দিনের মধ্যে করোনা ভাইরাসে আক্রান্ত এলাকা বা বিদেশে ভ্রমণ করেছি
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="r" value="option1" checked>
                                            <label class="form-check-label" for="r">
                                                গত ১৪ দিনের মধ্যে করোনা ভাইরাসে আক্রান্ত ব্যক্তির সংস্পর্শে গিয়েছিলাম
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">

                                    <div class="form-group border p-3">
                                        <label>আপনার কি এই রোগ গুলো আগে থেকেই আছে? :</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="s" value="option1">
                                            <label class="form-check-label" for="s">ফুসফুসের সমস্যা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="t" value="option1">
                                            <label class="form-check-label" for="t">হৃদরোগের সমস্যা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="u" value="option1">
                                            <label class="form-check-label" for="u">উচ্চ রক্ত চাপ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="v" value="option1">
                                            <label class="form-check-label" for="v">ডায়াবেটিস</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="w" value="option1">
                                            <label class="form-check-label" for="w">ক্যান্সার</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="x" value="option1">
                                            <label class="form-check-label" for="x">কিডনির সমস্যা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input input-inharit" type="checkbox" id="y" value="option1">
                                            <label class="form-check-label" for="y">একটিও না</label>
                                        </div>
                                    </div>

                                    <div class="form-group border p-3">
                                        <label>আপনার কি ধূমপানের অভ্যাস আছে? :</label>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="z" value="option1" checked>
                                            <label class="form-check-label" for="z">
                                                হ্যাঁ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="aa" value="option1" checked>
                                            <label class="form-check-label" for="aa">
                                                না
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group border p-3">
                                        <label> আপনি কি একজন স্বাস্থ্যকর্মী? (ডাক্তার, নার্স, সহায়ককর্মী ইত্যাদি)? :</label>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="ab" value="option1" checked>
                                            <label class="form-check-label" for="ab">
                                                হ্যাঁ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input input-inharit" type="radio" name="exampleRadios" id="ac" value="option1" checked>
                                            <label class="form-check-label" for="ac">
                                                না আপনি কি একজন স্বাস্থ্যকর্মী? (ডাক্তার, নার্স, সহায়ককর্মী ইত্যাদি)
                                            </label>
                                        </div>
                                    </div>

                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="submit" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
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
