@extends('layouts.layout')
@section('meta')
<script src="{{asset('assets/ample/src/libs/jquery/dist/jquery1234.min.js')}}"></script>

@endsection


@section('content')
<section class="" id="bg-section1">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 fix-mt-product ">
            	<a class="color-565" href="{{url('product')}}"><i class="fas fa-angle-left color-565"></i> กลับหน้ารวมสินค้า</a>
            </div>
        </div>
        <div class="row mt-5">
                <input type="hidden" id="product_id" value="{{$product_detail->product_id}}">
                <div class="col-md-12 col-lg-6"  >
                    <div class="demo" id="slide_img">
                        <ul id="lightSlider">
                            {{-- <li data-thumb="{{asset('assets/image/product/gallery18.png')}}">
                                <img class="w-100" src="{{asset('assets/image/product/gallery18.png')}}" />
                            </li>
                            <li data-thumb="{{asset('assets/image/product/gallery17.png')}}">
                                <img class="w-100" src="{{asset('assets/image/product/gallery17.png')}}" />
                            </li>
                            <li data-thumb="{{asset('assets/image/product/gallery16.png')}}">
                                <img class="w-100" src="{{asset('assets/image/product/gallery16.png')}}" />
                            </li>
                            <li data-thumb="{{asset('assets/image/product/gallery14.png')}}">
                                <img class="w-100" src="{{asset('assets/image/product/gallery14.png')}}" />
                            </li>
                            <li data-thumb="{{asset('assets/image/product/gallery13.png')}}">
                                <img class="w-100" src="{{asset('assets/image/product/gallery13.png')}}" />
                            </li> --}}
                        </ul>
                    </div>
                </div>

        	<div class="col-md-12 col-lg-6 mt-4 mt-lg-0" id="show_detail_1">
        		{{-- <h2 class="text-blue mb-3">บันไดไม้จริงโอ๊คเอ็นจิเนียร์ (ทำสี) ปิดผิวไม้จริงโอ๊ค</h2>
        		<small>ขนาด 25mm * 250mm * 1200mm</small>
        		<br><br>
        		<p class="text-blue">฿ 1,160</p>
        		<br><br><br><br>
        		<div>
        			<table>
        				<tr>
        					<td>
        						Share:
        					</td>
        					<td>
        						<img class="mx-2"  src="{{asset('assets/image/logo/facebook.png')}}">
        					</td>
        					<td>
        						<img class="mx-2"  src="{{asset('assets/image/logo/line.png')}}">
        					</td>
        				</tr>
        			</table>
        		</div>
        		<br>
        		<p>หมวดหมู่: บันไดบ้านสำเร็จรูป</p> --}}

        	</div>
        </div>
    </div>
</section>

<section>
	<div class="container">
		<div class="row" id="show_detail_description">
			{{-- <div class="col-md-12 ">
				<h5 class="text-blue mb-4">Product Description</h5>
				<p class="line-height-30"> • ลูกนอนบันไดไม้จริงเอ็นจิเนียร์ปิดผิวไม้จริงโอ๊ค รวมทำสี) ขนาด 25mm*250mm*1200 mm ราคา Promotion 1160 บาทต่อขั้น <br>
					• ลูกตั้งบันไดไม้จริงเอ็นจิเนียร์ปิดผิวไม้จริงโอ๊ค(รวมทำสี) ขนาด 16mm*200mm*1200 mm ราคา Promotion 840 บาทต่อขั้น<br>
					• ชานพักบันไดไม้จริงเอ็นจิเนียร์ปิดผิวไม้จริงโอ๊ค(รวมทำสี) ความหนา 25mm ขนาด 1200mm*1200 mm ราคา Promotion 4,800 บาทต่อขั้น<br>
					• บันไดไม้จริงเอ็นจิเนียร์โครงสร้างเป็นไม้จริงประกอบขึ้นรูปด้วยเทคโนโลยีขั้นสูง ลดการโก่งตัวของบันได<br>
					• ไม้โอ๊คและไม้จริงของบันไดไม้จริงเอ็นจิเนียร์เป็นไม้คุณภาพเกรดA ผ่านกระบวนการอบ<br>
					• บันไดไม้จริงเอ็นจิเนียร์ปิดผิวหน้าสวยงามด้วยลายไม้ ไม้จริงโอ๊คหนา3มิล<br>
					• บันไดไม้จริงเอ็นจิเนียร์โอ๊คพร้อมทำสี ทำสีจากโรงงานด้วยคุณภาพสีเกรด A สวยงาม งานสีคงสภาพและทนต่อรอยขีดข่วน<br>
					• ราคาบันไดไม้จริงเอ็นจิเนียร์ปิดผิวไม้จริงโอ๊ค มีราคาถูกกว่าไม้โอ๊คจริงทั้งชิ้น ด้วยการที่ใช้ไม้เนื้อแข็งมาประกอบในชั้นโครงสร้าง <br>ทำให้ช่วยลดการสูญเสียจากการผลิต และเป็นการใช้ทรัพยากรธรรมชาติให้เกิดประโยชน์สูงสุด<br>
					• บันไดไม้จริงเอ็นจิเนียร์ปิดผิวไม้เมอรูนัทสามารถผลิตขนาดได้ตามการออกแบบ ขนาดความกว้างและความยาวสูงสุด 3.50 เมตร เป็นบันไดชิ้นเดียว <br>
					• ช่วยลดเวลาในการติดตั้ง และช่วยลดรอยต่อของไม้บันไดและชานพัก ให้บันไดมีความสวยงาม<br>
					• กรณีให้ทางบริษัทติดตั้ง เป็นการติดบันไดไม้จริงเอ็นจิเนียร์ปิดผิวไม้จริงโอ๊คทำสีติดตั้งด้วยกาวPU เกรดA รับประกันการติดตั้ง 1 ปี คิดราคาตามปริมาณลูกนอนและชานพัก (ราคาประมาณการ 7000 บาท สำหรับบันไดบ้าน 2 ชั้น ลูกนอน 16 ขั้น ชานพัก 1 ชิ้น)<br>
					• บันไดไม้จริงเอ็นจิเนียร์ปิดผิวไม้จริงโอ๊ค เนื้อไม้มีสีขาวสามารถทำสีย้อมไม้ได้ทุกชนิด ราคาPromotion เป็นราคารวมทำสี ตามสีมาตรฐานของบริษัท
				</p>
			</div>
			<div class="col-md-12 mt-4">
				<h5 class="text-blue mb-4">สีมาตรฐานของบริษัท</h5>
        		<img class="mx-2"  src="{{asset('assets/image/product/colour.png')}}">
			</div> --}}
		</div>
	</div>
</section>

<section class="mt-5">
	<div class="container">
		<div class="row">
			<hr class="hr-line">
		</div>
		<div class="row">
			<div class="col-md-12">
				<h5 class="mb-4">สินค้าเกี่ยวข้อง</h5>
			</div>
		</div>
		<div class="row" id="product_other">
			{{-- <div class="col-lg-3 col-md-6 col-6 content">
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
            </div> --}}
		</div>
	</div>
</section>

@endsection

@section('script')
<script src="{{ asset('assets/js/web/producr_detail.js') }}"></script>

@endsection
