@extends('layouts.app')

@section('content')
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Crypto Top 10</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://i.ibb.co/gdh6VPP/Adobe-Scan-14-Jan-2022.jpg" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Victor-Isamel Reeves</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Top 10 choice</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="/"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2">
                        <a href="#"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="far fa-file float-left mx-2"></i>
                            Pages
                            <span><i class="fa fa-angle-down float-right"></i></span>
                        </a>
                        <ul class="list-reset -mx-2 bg-white-medium-dark">
                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                <a href="/login"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Login Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="/register"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Register Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="/about"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    About Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="/choices"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Choices
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">
                <div class="flex flex-col">
                    <div class="container-lg" style= "margin:0 auto;">
                        <div class= "row at -5">
                            @foreach($response as $currency)
                            <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3">
                                <div class="card" style="width: 7rem;">
                                    <img src="{{$currency['logo_url']}}" style="width: 75px; margin: 10px auto;">
                                    <div class="card-body">
                                        <div class="card-title"> {{$currency['currency']}}</div>
                                        <div class="card-text" style="margin: 5px;"> Name: {{$currency['name']}}</div>
                                        <div class="card-text" style="margin: 5px;"> Price: &#36; {{$currency['price']}}</div>
                                        <div class="card-text" style="margin: 5px;"> Circulating Supply: {{$currency['circulating_supply']}}</div>
                                        <div class="card-text" style="margin: 5px;"> Market Cap: {{$currency['market_cap']}}</div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">Made by:   <a href="https://therichpost.com/" target=" _blank">Victor-Ismael Reeves</a></div>
        </footer>
        <!--/footer-->
    </div>
</div>
@endsection
