@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <div class="client_main">
        <div class="client_sidebar">
            {{-- <div class="client_sidebar_button">
                <i class="fa fa-close"></i>
            </div> --}}
            <div class="profile_container">
                <img src="{{asset('/assets/images/logo.png')}}" alt="">
                <h6>شکار شەهاب</h6>
            </div>
            <div class="client_sidebar_item_container">
                <div class="client_sidebar_item">
                    <i class="fas fa-home mx-2"></i>
                    <span>سەرەکی</span>
                </div>
                <div class="client_sidebar_item">

                    <i class="fa  fa-clapperboard mx-2"></i>
                    <span>کۆرسەکان</span>
                </div>
                <div class="client_sidebar_item">
                    <i class="fas fa-file-invoice mx-2"></i>
                    <span>زانیاریەکان</span>
                </div>
                <div class="client_sidebar_item">
                    <i class="fas fa-file-invoice mx-2"></i>
                    <span>زانیاریەکان</span>
                </div>
                <div class="client_sidebar_item">
                    <i class="fas fa-file-invoice mx-2"></i>
                    <span>زانیاریەکان</span>
                </div>
            </div>
            <div class="client_sidebar_footer">
                <div class="client_sidebar_item">
                    <i class="fas fa-power-off mx-2"></i>
                    <span>چوونەدەرەوە</span>
                </div>
            </div>
        </div>
        <div class="content_container">
            <div class="client_navbar_container">
                @if ($authUser['user'][0]['verify'] != 1)
                    <div class="alert alert-warning">
                        please verify your account <i class="fa fa-warning"></i>
                    </div>
                @endif

                @session('verification1')
                    <div class="alert alert-success">
                        {{session('verification1') }} <i class="fa fa-check"></i>
                    </div>
                @endsession
            </div>
            <div class="content">
                @yield('newhome_content')
            </div>
        </div>
    </div>

    {{--
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
    </script> --}}
    </div>
@endsection