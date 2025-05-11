@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5  " onclick="openNav()" style="position: relative;">
    <div class="container-fluid">
        <img src="{{ asset('assets/images/logo.png') }}" class="kolang-logo" />
        <a class="navbar-brand" href="#"> کۆڵەنگ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav nav-list-container">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">سەرەکی <div></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div></div>کۆرسەکان
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">زانیاریەکان <div></div></a>
                </li>
                <li class="nav-item">

                    <form action="{{ route('user-register.logout') }}" method="POST" id="logout-form">
                        @csrf
                        <button class="nav-link" type="submit">چوونەدەرەوە</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="home-sidebar-container   ">
    {{-- <i class="fa fa-menu" id="menu"></i> --}}
    <div class="left sidebar row" id="mySidebar">
        <div class="row">

            <button class="toggle-sidebar px-5" onclick="openNav()">
                <i class="fa fa-bars "></i>
            </button>
        </div>

        <div class="sidebar-header">
            <p> <i class="fa fa-book mx-2 "></i>لیستی وانەکانی کۆرس </p>
        </div>

        <div class="sidebar-item-container">
            <div class="sidebar-item">
                <div class="icon"><i class="fa fa-check-circle"></i> </div>
                <div class="content">
                    <p><span>ڤیدیۆ</span> پشووى پەرلەمانی عێراق کۆتایی دێت؛ هەڵبژاردنی سەرۆک و لێبووردنى گشتى کاری
                        لەپێشینەن </p>
                    <span><i class="far fa-clock"></i> 30sec</span>
                </div>
            </div>

            <div class="sidebar-item">
                <div class="icon"><i class="fa fa-check-circle"></i> </div>
                <div class="content">
                    <p><span>ڤیدیۆ</span> پشووى پەرلەمانی عێراق کۆتایی دێت؛ هەڵبژاردنی سەرۆک و لێبووردنى گشتى کاری
                        لەپێشینەن </p>
                    <span><i class="far fa-clock"></i> 30sec</span>
                </div>
            </div>

            <div class="sidebar-item">
                <div class="icon"><i class="fa fa-check-circle"></i> </div>
                <div class="content">
                    <p><span>ڤیدیۆ</span> پشووى پەرلەمانی عێراق کۆتایی دێت؛ هەڵبژاردنی سەرۆک و لێبووردنى گشتى کاری
                        لەپێشینەن </p>
                    <span><i class="far fa-clock"></i> 30sec</span>
                </div>
            </div>

        </div>
    </div>
    <div class="right  " id="right">
        <div class="lecture-content   ">
            <button class="btn btn-primary" onclick="openNav()"> text </button>
        </div>
    </div>
    <script>
        var width = window.innerWidth;
        var toggleSidebar = false;
        var sidebar = document.getElementById('mySidebar');
        var content = document.getElementById('right');
        var sidebar_content = document.getElementsByClassName('sidebar-item-container')[0];
        var sidebar_header = document.getElementsByClassName('sidebar-header')[0];

        function openNav() {



            if (width > 780) {
                toggleSidebar = !toggleSidebar;
                if (toggleSidebar) {
                    sidebar_content.style.display = "none";
                    sidebar_header.style.display = "none";
                    sidebar.style.width = "5%";
                    content.style.width = "95%";
                } else {
                    sidebar.style.width = "20%";
                    content.style.width = "80%";
                    sidebar_content.style.display = "block";
                    sidebar_header.style.display = "block";

                }



            }

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