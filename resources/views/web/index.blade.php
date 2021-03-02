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
            <div class="col-md-5">
                <img class="w-100" src="{{asset('assets/image/product/aboutus_image.png')}}">
            </div>

            <div class="col-md-7">
                <h2 class="text-uppercase fix-font">FLYN Corperation co.th</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6">
                <table>
                    <tr>
                        <td>
                           <h1 class="text-blue p-30">25<span class="text-green">M</span></h1>
                           <!-- <p class="text-uppercase">Successful</p> 
                           <p class="text-uppercase">projects</p> -->
                        </td>
                        <td>
                            <img class="h-122" src="{{asset('assets/image/product/Rectangle-5.jpg')}}">
                        </td>
                        <td>
                            <p class="f-14 p-30 text-blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p>
                        </td>
                    </tr>
                </table>
                
            </div>
            <div class="col-md-6">
                 <table>
                    <tr>
                        <td>
                           <h1 class="text-blue p-30">5</h1> 
                          <!--  <p class="text-uppercase">Years in </p> 
                           <p class="text-uppercase">business</p> -->
                        </td>
                        <td>
                            <img class="h-122" src="{{asset('assets/image/product/Rectangle-5.jpg')}}">
                        </td>
                        <td>
                            <p class="f-14 p-30 text-blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-12">
                <img class="w-100" src="{{asset('assets/image/logo/testimonial_logo.png')}}">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        
    </div>
    
</section>



@endsection