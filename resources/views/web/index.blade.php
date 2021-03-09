@extends('layouts.layout') @section('content')

<section>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="{{asset('assets/image/product/banner_main.jpg')}}" class="d-block w-100" alt="banner flyncorp" />
                <div class="center-img">
                    <h1 class="text-uppercase fix-font">Professional Stairway</h1>
                    <p>จำหน่ายไม้บันไดยางพาราอัดประสาน พร้อมบริการทำสีจากโรงงาน</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="d-flex align-items-center" id="bg-section1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 my-3 my-lg-0 order-lg-1 order-2">
                <img class="w-100" src="{{asset('assets/image/product/aboutus_image.png')}}">
            </div>

            <div class="col-md-7 pl-5 my-3 my-lg-0 order-lg-2 order-1">
                <h2 class="text-uppercase fix-font">FLYN Corperation co.th</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
        </div>
    </div>
</section>

<section class="py-1 my-1 py-lg-5 my-lg-5">
    <div class="container">
        <div class="row my-5  d-lg-flex d-md-none d-none" >
            <div class="col-md-6 col-12 ">
                <div id="Successful1">
                    <span>25</span><span class="text-green f-30">M</span>
                </div>
                <div id="Successful2">
                    <span>Successful<br/>projects</span>
                </div>
                <svg class="Rectangle_5">
                    <rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="1" height="173">
                    </rect>
                </svg>
                <div id="Successful3">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</span>
                </div>
                
            </div>
            <div class="col-md-6 col-12">
                <div id="Successful1">
                    <span>5</span>
                </div>
                <div id="Successful2">
                    <span>Years in <br/>business</span>
                </div>
                <svg class="Rectangle_5">
                    <rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="1" height="173">
                    </rect>
                </svg>
                <div id="Successful3">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</span>
                </div>
            </div>
        </div>
        <div class="row mb-5 d-lg-none d-block d-md-block ">
            <div class="col-12">
                 <span class="text-center" id="Successful1">25</span><span class="text-green f-30">M</span>
                 <p id="Successful2"><span>Successful<br/>projects</span></p>
                 <hr class="hr-index">
                <span class="text-blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</span>
            </div>
            <div class="col-12">
                  <span class="text-center" id="Successful1">5</span>
                 <p id="Successful2"> <span>Years in <br/>business</span></p>
                 <hr class="hr-index">
                <span class="text-blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</span>
            </div>
            
        </div>
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <img class="w-75" src="{{asset('assets/image/logo/testimonial_logo.png')}}">
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient">
    <div class="container py-5 ">
        <div class="row py-5">
            <div class="col-md-12">
                <h2 class="text-center text-uppercase text-white mb-4">our portfolio</h2>
            </div>
            <div class="col-md-4">
                <img class="w-100" src="{{asset('assets/image/product/gallery01.jpg')}}">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mt-lg-0 mt-4">
                        <img class="w-100"  src="{{asset('assets/image/product/gallery02.jpg')}}">
                    </div>
                    <div class="col-md-6 mt-lg-0 mt-4">
                        <img class="w-100"  src="{{asset('assets/image/product/gallery03.jpg')}}">
                    </div>
                    <div class="col-md-6 mt-4">
                        <img class="w-100"  src="{{asset('assets/image/product/gallery04.jpg')}}">
                    </div>
                    <div class="col-md-6 mt-4">
                        <img class="w-100"  src="{{asset('assets/image/product/gallery05.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>



@endsection