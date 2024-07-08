@extends('layouts.app')

@section('content')
{{--    <div class="layout-container     p-5 bg-light">--}}


{{--        <div class="content-section">--}}
{{--            <div class="row p-4  title-container">--}}
{{--                <h3>زیادکردن</h3>--}}
{{--            </div>--}}
{{--            <div class="content-container">--}}
{{--                <div class="right">--}}
{{--                    <div class="row"><h4>کۆرس بووک</h4></div>--}}
{{--                    <div >--}}
{{--                        <div class="list-tile-header">--}}
{{--                            <p class="m-0">وانەی یەکەم</p>--}}
{{--                        </div>--}}
{{--                        <div class="list-tile-sub">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa-regular fa-check-circle" ></i>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <p>  <span>video : </span> وانەی یەکەم لێرەوە دەستپێدەکات</p>--}}
{{--                                <span><i class="fa-regular fa-clock"></i> ٣٠ چرکە</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-tile-sub">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa-regular fa-check-circle" ></i>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <p>  <span>video : </span> وانەی یەکەم لێرەوە دەستپێدەکات</p>--}}
{{--                                <span><i class="fa-regular fa-clock"></i> ٣٠ چرکە</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-tile-sub">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa-regular fa-check-circle" ></i>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <p>  <span>video : </span> وانەی یەکەم لێرەوە دەستپێدەکات</p>--}}
{{--                                <span><i class="fa-regular fa-clock"></i> ٣٠ چرکە</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-tile-sub">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa-regular fa-check-circle" ></i>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <p>  <span>video : </span> وانەی یەکەم لێرەوە دەستپێدەکات</p>--}}
{{--                                <span><i class="fa-regular fa-clock"></i> ٣٠ چرکە</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="left">--}}
{{--                    left--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5  " style="position: relative;">
    <div class="container-fluid">
        <img src="{{asset('assets/images/logo.png')}}" class="kolang-logo" />
        <a class="navbar-brand" href="#">  کۆڵەنگ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav nav-list-container">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">سەرەکی <div></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <div></div>کۆرسەکان</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">زانیاریەکان <div></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" > <div></div>چوونەدەرەوە</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

 <div class="home-sidebar-container   "  >
    <i class="fa fa-menu" id="menu"></i>
    <div class="left sidebar" id="mySidebar"  >
        <div>
            <button class="toggle-sidebar px-5" >
                <i class="fa fa-bars "></i> <label class="mx-2">لابردنی لیست</label>
            </button>
        </div>
        <div>
            <p> <i class="fa fa-book mx-2 "></i>لیستی وانەکانی کۆرس </p>
        </div>
        <hr>
        <div class="sidebar-item-container">
            <div class="sidebar-item">
               <div class="icon"><i class="fa fa-check-circle" ></i> </div>
                <div class="content">
                    <p><span>ڤیدیۆ</span> پشووى پەرلەمانی عێراق کۆتایی دێت؛ هەڵبژاردنی سەرۆک و لێبووردنى گشتى کاری لەپێشینەن </p>
                    <span><i class="far fa-clock"></i> 30sec</span>
                </div>
            </div>

            <div class="sidebar-item">
                <div class="icon"><i class="fa fa-check-circle" ></i> </div>
                <div class="content">
                    <p><span>ڤیدیۆ</span> پشووى پەرلەمانی عێراق کۆتایی دێت؛ هەڵبژاردنی سەرۆک و لێبووردنى گشتى کاری لەپێشینەن </p>
                    <span><i class="far fa-clock"></i> 30sec</span>
                </div>
            </div>

            <div class="sidebar-item">
                <div class="icon"><i class="fa fa-check-circle" ></i> </div>
                <div class="content">
                    <p><span>ڤیدیۆ</span> پشووى پەرلەمانی عێراق کۆتایی دێت؛ هەڵبژاردنی سەرۆک و لێبووردنى گشتى کاری لەپێشینەن </p>
                    <span><i class="far fa-clock"></i> 30sec</span>
                </div>
            </div>

        </div>
    </div>
    <div class="right" id="right">
        <div class="lecture-content">

        </div>
    </div>
<script>
    function openNav() {
        // document.getElementById("mySidebar").style.width="fit-content";
        // document.getElementById("right").style.display = "none";
        // document.getElementById("menu").style.display = "block";
    }

    function closeNav() {
        // document.getElementById("mySidebar").style.flex = "1";
        // document.getElementById("right").style.flex = "15";
        // document.getElementById("main").style.marginLeft= "0";
    }
</script>
</div>

@endsection
