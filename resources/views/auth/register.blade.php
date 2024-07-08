@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="background-section"></div>--}}

{{--<div class="login-container">--}}
{{--    <form action="" method="post">--}}
{{--        @csrf--}}
{{--        <div class="login-form">--}}
{{--            <div class="row">--}}
{{--                <img src="{{asset('assets/images/logo.png')}}" class="login-logo"  >--}}
{{--            </div>--}}
{{--            <div class="row p-1">--}}
{{--                <x-input-text column="col-md-6" name="useraname" label="ناوی بەکارهێنەر" placeholder="ناوی بەکارهێنەر" />--}}
{{--                <x-input-text column="col-md-6" name="password" placeholder="وشەی تێپەڕ" label="وشەی تێپەڕ"/>--}}
{{--            </div>--}}
{{--            <div class="row p-1">--}}
{{--                <x-input-text column="col-md-4" name="a" placeholder="ناوتی سیانی" label="ناوی سیانی"/>--}}
{{--                <x-input-text column="col-md-4" name="date_birth" placeholder="بەرواری لەدایکبوون" label="بەرواری لەدایکبوون"/>--}}
{{--                <x-input-select column="col-md-4" name="account_type" placeholder="  هەژمار دیاریبکە  " label="جۆری هەژمار "/>--}}
{{--            </div>--}}
{{--            <div class="row p-1">--}}
{{--                <x-input-text column="col-md-4" name="mobile" placeholder="مۆبایل" label="مۆبایل"/>--}}
{{--                <x-input-select column="col-md-4" name="education_level" placeholder="ئاستی زانستی دیاریبکە   " label="ئاستی زانستی" />--}}
{{--               <x-input-select  column="col-md-4" name="gender" placeholder="ڕەگەز دیاریبکە  " label="ڕەگەز  "/>--}}
{{--            </div>--}}
{{--            <div class="row p-1">--}}
{{--                <x-submit-button />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--    <div class="col-md-6 col-md-offset-3">--}}
{{--        <form id="msform">--}}
{{--            <!-- progressbar -->--}}
{{--            <ul id="progressbar">--}}
{{--                <li class="active">Personal Details</li>--}}
{{--                <li>Social Profiles</li>--}}
{{--                <li>Account Setup</li>--}}
{{--            </ul>--}}
{{--            <!-- fieldsets -->--}}
{{--            <fieldset>--}}
{{--                <h2 class="fs-title">Personal Details</h2>--}}
{{--                <h3 class="fs-subtitle">Tell us something more about you</h3>--}}
{{--                <input type="text" name="fname" placeholder="First Name"/>--}}
{{--                <input type="text" name="lname" placeholder="Last Name"/>--}}
{{--                <input type="text" name="phone" placeholder="Phone"/>--}}
{{--                <input type="button" name="next" class="next action-button" value="Next"/>--}}
{{--            </fieldset>--}}
{{--            <fieldset>--}}
{{--                <h2 class="fs-title">Social Profiles</h2>--}}
{{--                <h3 class="fs-subtitle">Your presence on the social network</h3>--}}
{{--                <input type="text" name="twitter" placeholder="Twitter"/>--}}
{{--                <input type="text" name="facebook" placeholder="Facebook"/>--}}
{{--                <input type="text" name="gplus" placeholder="Google Plus"/>--}}
{{--                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>--}}
{{--                <input type="button" name="next" class="next action-button" value="Next"/>--}}
{{--            </fieldset>--}}
{{--            <fieldset>--}}
{{--                <h2 class="fs-title">Create your account</h2>--}}
{{--                <h3 class="fs-subtitle">Fill in your credentials</h3>--}}
{{--                <input type="text" name="email" placeholder="Email"/>--}}
{{--                <input type="password" name="pass" placeholder="Password"/>--}}
{{--                <input type="password" name="cpass" placeholder="Confirm Password"/>--}}
{{--                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>--}}
{{--                <input type="submit" name="submit" class="submit action-button" value="Submit"/>--}}
{{--            </fieldset>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>--}}
{{--<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>--}}

{{--     <script >--}}


{{--        //jQuery time--}}
{{--        var current_fs, next_fs, previous_fs; //fieldsets--}}
{{--        var left, opacity, scale; //fieldset properties which we will animate--}}
{{--        var animating; //flag to prevent quick multi-click glitches--}}

{{--        $(".next").click(function(){--}}
{{--            if(animating) return false;--}}
{{--            animating = true;--}}

{{--            current_fs = $(this).parent();--}}
{{--            next_fs = $(this).parent().next();--}}

{{--            //activate next step on progressbar using the index of next_fs--}}
{{--            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");--}}

{{--            //show the next fieldset--}}
{{--            next_fs.show();--}}
{{--            //hide the current fieldset with style--}}
{{--            current_fs.animate({opacity: 0}, {--}}
{{--                step: function(now, mx) {--}}
{{--                    //as the opacity of current_fs reduces to 0 - stored in "now"--}}
{{--                    //1. scale current_fs down to 80%--}}
{{--                    scale = 1 - (1 - now) * 0.2;--}}
{{--                    //2. bring next_fs from the right(50%)--}}
{{--                    left = (now * 50)+"%";--}}
{{--                    //3. increase opacity of next_fs to 1 as it moves in--}}
{{--                    opacity = 1 - now;--}}
{{--                    current_fs.css({--}}
{{--                        'transform': 'scale('+scale+')',--}}
{{--                        'position': 'absolute'--}}
{{--                    });--}}
{{--                    next_fs.css({'left': left, 'opacity': opacity});--}}
{{--                },--}}
{{--                duration: 800,--}}
{{--                complete: function(){--}}
{{--                    current_fs.hide();--}}
{{--                    animating = false;--}}
{{--                },--}}
{{--                //this comes from the custom easing plugin--}}
{{--                easing: 'easeInOutBack'--}}
{{--            });--}}
{{--        });--}}

{{--        $(".previous").click(function(){--}}
{{--            if(animating) return false;--}}
{{--            animating = true;--}}

{{--            current_fs = $(this).parent();--}}
{{--            previous_fs = $(this).parent().prev();--}}

{{--            //de-activate current step on progressbar--}}
{{--            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");--}}

{{--            //show the previous fieldset--}}
{{--            previous_fs.show();--}}
{{--            //hide the current fieldset with style--}}
{{--            current_fs.animate({opacity: 0}, {--}}
{{--                step: function(now, mx) {--}}
{{--                    //as the opacity of current_fs reduces to 0 - stored in "now"--}}
{{--                    //1. scale previous_fs from 80% to 100%--}}
{{--                    scale = 0.8 + (1 - now) * 0.2;--}}
{{--                    //2. take current_fs to the right(50%) - from 0%--}}
{{--                    left = ((1-now) * 50)+"%";--}}
{{--                    //3. increase opacity of previous_fs to 1 as it moves in--}}
{{--                    opacity = 1 - now;--}}
{{--                    current_fs.css({'left': left});--}}
{{--                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});--}}
{{--                },--}}
{{--                duration: 800,--}}
{{--                complete: function(){--}}
{{--                    current_fs.hide();--}}
{{--                    animating = false;--}}
{{--                },--}}
{{--                //this comes from the custom easing plugin--}}
{{--                easing: 'easeInOutBack'--}}
{{--            });--}}
{{--        });--}}

{{--        $(".submit").click(function(){--}}
{{--            return false;--}}
{{--        })--}}
{{--    </script>--}}
<link  href="{{asset('assets/registerStyle.css')}}" rel="stylesheet" />
<div id="page" class="site">
    <div class="container">
        <div class="form-box">
            <div class="progress">
                <div class="logo"> <img src="{{asset('assets/images/logo.png')}}" /> </div>
                <ul class="progress-steps">
                    <li class="step active">
                        <span>1</span>
                        <p>زانیاری کەسی <br> </p>
                    </li>
                    <li class="step  ">
                        <span>2</span>
                        <p>پەیوەندی <br>  </p>
                    </li>
                    <li class="step  ">
                        <span>3</span>
                        <p>ئاسایش <br>  </p>
                    </li>
                </ul>
            </div>
            <form action="">
                <div class="form-one form-step active">
                    <div class="bg-svg"></div>
                    <h2>زانیارییە کەسیەکان</h2>
                    <x-input-text name="full_name" placeholder="ناوی سیانی" label="ناوی سیانی" column="col-md-12" />
                    <x-input-select name="full_name" placeholder="جۆری هەژمار" label="جۆری هەژمار" column="col-md-12" />
                    <div>
                        <label>لەدایک بوون</label>
                        <div class="grouping">
                            <input type="text" placeholder="ڕۆژ" pattern=[0-9]*" name="day" value="" min="0" max="31"  >
                            <input type="text" placeholder="مانگ" pattern="[0-9]*" name="month" value="" min="0" max="12">
                            <input type="text" placeholder="ساڵ" pattern="[0-9]*" name="year" value="" min="0" max="2050">
                        </div>
                    </div>
                    <x-input-select name="education_level" placeholder="ئاستی زانستی" label="ئاستی زانستی" column="col-md-12" />
                    <x-input-select name="gender" placeholder="ڕەگەز  " label="ڕەگەز  " column="col-md-12" />
                </div>
                <div class="form-two form-step ">
                    <div class="bg-svg"></div>
                    <h2>زانیاری پەیوەندی</h2>

                    <x-input-text name="phone1" placeholder="ژمارە مۆبایل  " label="ژمارە مۆبایل  " column="col-md-12" />
                    <x-input-text name="phone2" placeholder="ژمارە مۆبایل ٢  " label="ژمارە مۆبایل ٢ " column="col-md-12" />
                    <x-input-text name="phone3" placeholder="ژمارە مۆبایل ٣ " label="ژمارە مۆبایل ٣ " column="col-md-12" />
                </div>

                <div class="form-three form-step">
                    <div class="bg-svg"></div>
                    <h2>زانیاری ئاسایش</h2>

                    <x-input-email name="email" placeholder="ئیمەیڵ  " label="ئیمەیڵ  " column="col-md-12" />
                    <x-input-text name="username" placeholder="ناوی بەکارهێنەر" label="ناوی بەکارهێنەر" column="col-md-12" />
                    <x-input-password name="password" placeholder="وشەی تێپەڕ  " column="col-md-12" label="وشەی تێپەڕ" />
                    <x-input-password name="password_confirmation" placeholder="دڵنیابوونەوەی وشەی تێپەڕ" column="col-md-12" label="دڵنیابوونەوەی وشەی تێپەڕ" />
                </div>
                <div class="btn-group">
                    <button class="btn-prv" id="prev" type="button" disabled > <i class="fa fa-arrow-right-long  " ></i>گەڕانەوە </button>
                    <button class="btn-next"  id="next" type="button" >  <i class="fa fa-arrow-left-long  " ></i>دواتر  </button>
                    <button class="btn-submit" id="submit" type="button"  > <i class="fa fa-paper-plane  " ></i>ناردن</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
