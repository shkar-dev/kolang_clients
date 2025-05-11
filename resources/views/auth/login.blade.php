@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/registerStyle.css') }}">
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"> <img src="{{ asset('assets/images/logo.png') }}" /> </div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>چوونەژوورەوە <br> </p>
                        </li>
                    </ul>
                </div>

                {{  session('message') }}

                <form action="{{ route('user-register.login') }}" method="POST">
                    @csrf
                    <div class="form-one form-step active">
                        {{-- @if (session('message'))
                        <div class="alert alert-warning">
                            {{ session('message') }}
                        </div>
                        @endif --}}
                        <div class="bg-svg"></div>
                        <h2>چوونەژوورەوە</h2>

                        <x-input-email name="email" placeholder="ئیمەیڵ " column="col-md-12" label="ئیمەیڵ" />
                        {{-- <x-input-text name="username" placeholder="ناوی بەکارهێنەر " column="col-md-12"
                            label="ناوی بەکارهێنەر" /> --}}

                        <x-input-password name="password" placeholder="وشەی تێپەڕ  " column="col-md-12"
                            label="وشەی تێپەڕ" />
                        {{-- <x-input-password name="password_confirmation" placeholder="دڵنیابوونەوەی وشەی تێپەڕ"
                            column="col-md-12" label="دڵنیابوونەوەی وشەی تێپەڕ" /> --}}
                    </div>
                    <div class="btn-group">
                        <button class="btn-custom btn-submit" id="submit" type="submit"> <i
                                class="fa fa-paper-plane  "></i>ناردن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection