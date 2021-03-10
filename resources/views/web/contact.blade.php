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
        	<div class="col-md-6 text-center">
        		<img class="w-75 "  src="{{asset('assets/image/product/gallery06.jpg')}}">
        	</div>
        	<div class="col-md-6 mt-5 mt-lg-0">
        		<h3 class="text-uppercase f-bold text-blue fix-font text-center text-lg-left"><span class="img-line"><img class="" src="{{asset('assets/image/line.png')}}"></span>Contact Form</h3>
                <br><br><br><br>
                <form>
                  <div class="form-group">
                    <label class="text-color-h" for="textname">ชื่อ:</label>
                    <input type="text" class="form-control" id="textname" placeholder="พิทยฉัตร ฉัตระเนตร">
                  </div>
                  <div class="form-group">
                    <label class="text-color-h" for="email">อีเมล:</label>
                    <input type="email" class="form-control" id="email" >
                  </div>
                  <div class="form-group">
                    <label class="text-color-h" for="textnumber">เบอร์มือถือ:</label>
                    <input type="text" class="form-control" id="textnumber" >
                  </div>
                  <div class="form-group">
                    <label class="text-color-h" for="textdetail">หัวข้อ:</label>
                    <input type="text" class="form-control" id="textdetail" >
                  </div>
                  <div class="form-group">
                    <label class="text-color-h" for="textmessage">ข้อความ:</label>
                    <textarea class="form-control" id="textmessage" rows="3"></textarea>
                  </div>
                </form>
                <div class="text-center mt-5 ">
                    <button type="button" class="btn btn-primary btn-contat">ส่งข้อความ</button>
                </div>
        	</div>
        	
        </div>
    </div>

</section>


@endsection