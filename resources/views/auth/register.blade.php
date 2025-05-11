@extends('layouts.app')

@section('content')
    <link href="{{ asset('assets/registerStyle.css') }}" rel="stylesheet" />
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"> <img src="{{ asset('assets/images/logo.png') }}" /> </div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>زانیاری کەسی </p>
                        </li>
                        <li class="step  ">
                            <span>2</span>
                            <p>پەیوەندی </p>
                        </li>
                        <li class="step  ">
                            <span>3</span>
                            <p>ئاسایش </p>
                        </li>

                    </ul>
                </div>
                {{-- validation pishandanawakai mawa  --}}
                <form action="{{ route('user-register.create') }}" method="POST">
                    @csrf
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>زانیارییە کەسیەکان</h2>
                        <x-input-text name="name" placeholder="ناوی سیانی" label="ناوی سیانی" column="col-md-12" />

                        <x-input-select name="account_type" placeholder="جۆری هەژمار" label="جۆری هەژمار" column="col-md-12"
                            :options="$accountType" />
                        <div>
                            <label>لەدایک بوون</label>
                            <div class="grouping">
                                <input type="text" placeholder="ڕۆژ" pattern="[0-9]*" name="day" value=""
                                    min="0" max="31">
                                <input type="text" placeholder="مانگ" pattern="[0-9]*" name="month" value=""
                                    min="0" max="12">
                                <input type="text" placeholder="ساڵ" pattern="[0-9]*" name="year" value=""
                                    min="0" max="2050">
                            </div>
                            @error('date_of_birth')
                                <div class="alert alert-danger m-0 client_form_error">{{ $message }}</div>
                            @enderror
                        </div>

                        <x-input-select-academic-level name="academic_level_id" placeholder="ئاستی زانستی"
                            label="ئاستی زانستی" column="col-md-12" :options="$academicLevel" />
                        <x-input-select name="gender" placeholder="ڕەگەز  " label="ڕەگەز  " column="col-md-12"
                            :options="$gender" />
                    </div>
                    <div class="form-two form-step ">
                        <div class="bg-svg"></div>
                        <h2>زانیاری پەیوەندی</h2>

                        <x-input-text name="mobile_1" placeholder="ژمارە مۆبایل  " label="ژمارە مۆبایل  "
                            column="col-md-12" />
                        <x-input-text name="mobile_2" placeholder="ژمارە مۆبایل ٢  " label="ژمارە مۆبایل ٢ "
                            column="col-md-12" />
                        <x-input-text name="mobile_3" placeholder="ژمارە مۆبایل ٣ " label="ژمارە مۆبایل ٣ "
                            column="col-md-12" />
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                        <h2>زانیاری ئاسایش</h2>

                        <x-input-email name="email" placeholder="ئیمەیڵ  " label="ئیمەیڵ  " column="col-md-12" />
                        <x-input-text name="username" placeholder="ناوی بەکارهێنەر" label="ناوی بەکارهێنەر"
                            column="col-md-12" />
                        <x-input-password name="password" placeholder="وشەی تێپەڕ  " column="col-md-12"
                            label="وشەی تێپەڕ" />
                        <x-input-password name="password_confirmation" placeholder="دڵنیابوونەوەی وشەی تێپەڕ"
                            column="col-md-12" label="دڵنیابوونەوەی وشەی تێپەڕ" />
                    </div>

                    <div class="btn-group">
                        <button class="btn-custom btn-prv" id="prev" type="button" disabled> <i
                                class="fa fa-arrow-right-long  "></i>گەڕانەوە </button>
                        <button class="btn-custom btn-next" id="next" type="button"> <i
                                class="fa fa-arrow-left-long  "></i>دواتر </button>
                        <button class="btn-custom btn-submit" id="submit" type="submit"> <i
                                class="fa fa-paper-plane"></i>ناردن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
