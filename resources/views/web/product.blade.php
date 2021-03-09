@extends('layouts.layout') @section('content')
<section class="" id="bg-section1">
    <div class="container ">
        <div class="row text-center">
            <div class="col-md-12 fix-mt-product">
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold">PRODUCTS</h1>
                <p>รายการไม้บันไดยางพาราประสานสำเร็จรูป (ขนาดมาตรฐานที่ใช้ทั่วไป)</p>
            </div>
        </div>
        <div class="row my-5 py-5">
        	<div class="col-md-6 card-p-y text-center">
        		<img class="w-75 "  src="{{asset('assets/image/product/gallery01.png')}}">
                    <div class="card-body text-left">
                        <h2 class="text-blue mb-3">ลูกนอน</h2>
                        <ul class="p-0 line-height-30">
                            <li>
                                ลูกนอน 25x275x1200mm (หนา 1")
                            </li>
                            <li>
                                ลูกนอน 25x300x1200mm (หนา 1")
                            </li>
                            <li>
                                ลูกนอน 30x275x1200mm (หนา 1 1/2")
                            </li>
                            <li>
                                ลูกนอน 30x300x1200mm (หนา 1 1/2")
                            </li>
                        </ul>
                    </div>
        	</div>
        	<div class="col-md-6 card-p-y text-center">
        		<img class="w-75 "  src="{{asset('assets/image/product/gallery02.png')}}">
                    <div class="card-body text-left ">
                        <h2 class="text-blue mb-3">ลูกตั้ง</h2>
                        <ul class="p-0 line-height-30">
                            <li>
                                16x200x1200mm                     
                            </li>
                        </ul>
                    </div>
        	</div>
            <div class="col-md-6 card-p-y text-center">
                <img class="w-75 "  src="{{asset('assets/image/product/gallery03.png')}}">
                <div class="card-body text-left">
                    <h2 class="text-blue mb-3">ชานพักสามเหลี่ยม</h2>
                    <ul class="p-0 line-height-30">
                        <li>
                            ชานพักสามเหลี่ยม 25x1200x1200mm
                        </li>
                        <li>
                            ชานพักสามเหลี่ยม 30x1200x1200mm
                        </li>
                        <li>
                            ชานพักสี่เหลี่ยม 25x1200x1200mm
                        </li>
                        <li>
                            ชานพักสี่เหลี่ยม 30x1200x1200mm
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 card-p-y text-center">
                <img class="w-75 "  src="{{asset('assets/image/product/gallery04.png')}}">
                 <div class="card-body text-left">
                    <h2 class="text-blue mb-3">ราวบันได</h2>
                    <ul class="p-0 line-height-30">
                        <li>
                            ราวบันได 30x75x3000mm
                        </li>
                        <li>
                            ราวบันได 50x75x3000mm
                        </li>
                        <li>
                            ราวบันไดกลม 50x50x3000mm
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient">
	<div class="container py-5 text-center">
		<div class="row py-5">
			<div class="col-md-12">
				<button type="button" class="btn btn-primary btn-lg btn-product">ติดต่อสอบถามเพิ่มเติม</button>
			</div>
		</div>
	</div>
</section>


@endsection
