@extends('layouts.layout') @section('content')
<section class="" id="bg-section1">
	 <div class="container ">
        <div class="row text-center">
        	<div class="col-md-12 fix-mt-product">
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold">CONTACT US</h1>
                <p>หากมีข้อสงสัย กรุณากรอกข้อมูลของคุณ จากนั้นเจ้าหน้าที่จะติดต่อกลับ
				<br>เพื่อตอบทุกคำถามที่คุณอยากทราบ หรือส่งอีเมล์มาที่ suphakrit.f@gmail.com</p>
            </div>
        </div>
        <div class="row my-5 py-5">
        	<div class="col-md-6">
        		<img class="w-75 "  src="{{asset('assets/image/product/gallery06.jpg')}}">
        	</div>
        	<div class="col-md-6">
        		<h3 class="text-uppercase f-bold text-blue fix-font"><span class="img-line"><img class="" src="{{asset('assets/image/line.png')}}"></span>Contact Form</h3>
        	</div>
        	
        </div>
    </div>

</section>


@endsection