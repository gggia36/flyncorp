@extends('layouts.layout') @section('content')
<style>
   .filter{
        width: 115px;
        height: 40px;
        text-align: center;
   }

</style>

<section class="" id="bg-section1">
    <div class="container ">
        <div class="row text-center">
            <div class="col-md-12 fix-mt-product">
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold">บันไดสำเร็จรูป</h1>
                <p>บันไดสำเร็จรูปที่เป็นที่นิยมใช้ในปัจจุบันแบ่งออกเป็นสองชนิด คือบันไดไม้จริง กับบันไดไม้สังเคราะห์</p>
                @foreach ($Product as $item)
                    <p>{{$item}}</p>
                @endforeach
            </div>
        </div>
        <div class="row">
        	<div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <p class="f-14 ">เรียงตาม</p>
                    </div>
                    <div class="col-8 mx-4" >
                        {{-- <div class="dropdown mx-4">
                            <button class="btn btn-secondary dropdown-toggle dropdown-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            อัพเดทล่าสุด
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">ราคาสูงสุด</button>
                            <button class="dropdown-item" type="button">ราคาต่ำสุด</button>
                            </div>
                        </div> --}}

                        <select id="Filter" name="Filter" class="filter">
                            <option value="1">อัพเดทล่าสุด</option>
                            <option value="2">ราคาสูงสุด </option>
                            <option value="3">ราคาต่ำสุด</option>
                        </select>

                    </div>
                </div>


        	{{-- <table>
        		<tr>
        			<td>
        		 		<p class="f-14 mb-0">เรียงตาม</p>
        			</td>
        			<td>
        				<div class="dropdown mx-4">
						  <button class="btn btn-secondary dropdown-toggle dropdown-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    อัพเดจล่าสุด
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <button class="dropdown-item" type="button">ราคาสูงสุด</button>
						    <button class="dropdown-item" type="button">ราคาต่ำสุด</button>
						  </div>
						</div>
        			</td>
        		</tr>
        	</table> --}}
        	</div>
        	<div class="col-6 text-right">
        		 <p class="f-14 py-2 mb-0">พบสินค้า 19 ชิ้น</p>
        	</div>
        </div>
        <div class="row mt-5">
        	<div class="col-lg-3 col-md-6 col-6 ">
                <a href="{{url('product_detail')}}">
                    <div class="img-hover-zoom">
                        <img class="w-100 img" src="{{asset('assets/image/product/gallery7.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ชานพักบันไดMDFปิดผิวลามิเนตHPL</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 2,800</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100 img" src="{{asset('assets/image/product/gallery8.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ชานพักบันไดวีว่าบอร์ดปิดผิวลามิ</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 3,400</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100 img" src="{{asset('assets/image/product/gallery9.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ชานพักบันไดไม้โอ๊คเอ็นจิเนียร์(ทำสี)</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 2,800</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
                    <div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery10.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ชานพักบันไดวีว่าบอร์ดปิดผิวลามิ</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 3,400</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery14.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ชานพักบันไดวีว่าบอร์ดปิดผิวลามิ</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 4,200</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery12.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ชานพักบันไดไม้ยางพาราประสาน</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 2,400</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery11.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ลูกนอนบันไดไม้ยางพาราประสาน</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 480</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery13.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ลูกนอนบันไดไม้ยางพาราประสาน</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 640</p>
            		</div>
                </a>
        	</div>

        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery15.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ชานพักบันไดวีว่าบอร์ดปิดผิวลามิ</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 4,200</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
        		<div class="img-hover-zoom">
                    <img class="w-100" src="{{asset('assets/image/product/gallery16.png')}}">
                </div>
        		<div class="card-block">
        			<h5 class="fixed-text-1 text-blue">ชานพักบันไดไม้ยางพาราประสาน</h5>
        			<small class="color-888">ขนาด 25*1200*1200 mm</small>
        			<br><br>
        			<p class="text-blue">฿ 4,200</p>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery17.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ลูกนอนบันไดไม้ยางพาราประสาน</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 480</p>
            		</div>
                </a>
        	</div>
        	<div class="col-lg-3 col-md-6 col-6">
                <a href="{{url('product_detail')}}">
            		<div class="img-hover-zoom">
                        <img class="w-100" src="{{asset('assets/image/product/gallery18.png')}}">
                    </div>
            		<div class="card-block">
            			<h5 class="fixed-text-1 text-blue">ลูกนอนบันไดไม้ยางพาราประสาน</h5>
            			<small class="color-888">ขนาด 25*1200*1200 mm</small>
            			<br><br>
            			<p class="text-blue">฿ 640</p>
            		</div>
                </a>
        	</div>

        </div>
    </div>
</section>

@endsection
