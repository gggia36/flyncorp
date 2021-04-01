@extends('layouts.layout') @section('content')
<section class="" id="bg-section1">
    <div class="container ">
        <div class="row text-center">
            <div class="col-md-12 fix-mt-product">
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold">PRODUCTS</h1>
                {{-- <p>รายการไม้บันไดยางพาราประสานสำเร็จรูป (ขนาดมาตรฐานที่ใช้ทั่วไป)</p> --}}
            </div>
        </div>
        <div class="row my-5 py-5" id="show_category">
            {{-- <div class="col-md-6 card-p-y ">
                <img class="w-75 "  src="{{asset('assets/image/product/product.png')}}">
                <div class="mt-5 text-left">
                    <h2 class="text-blue mb-3">บันไดสำเร็จรูป</h2>
                    <label class="line-height-30">เหมาะกับการออกแบบบันไดที่ชื่นชอบลายไม้ของไม้จริงธรรมชาติ บันไดไม้จริงมีข้อดีคือมีความสวยงามของลายไม้ มีความแข็งแรงด้วยคุณสมบัติของไม้เนื้อแข็ง ข้อจำกัดคืออาจมีการโก่งตัวของบันไดหลังการใช้งาน ปัจจุบันมีกระบวนการผลิตบันไดไม้จริงที่ทันสมัย เป็นการประกอบขึ้นรูปและปิดผิว ช่วยลดการโก่งตัวของไม้บันได เรียกว่าบันไดไม้จริงเอ็นจิเนียร์ นอกจากนั้นยังสามารถผลิตขนาดของบันไดให้มีขนาดความกว้าง ความยาว และความหนา ได้ตามขนาดที่ต้องการ</label>
                    <br><br>
                    <a href="{{url('product')}}" class="text-blue f-14">ดูรายละเอียด</a>
                </div>
            </div>
            <div class="col-md-6 card-p-y mt-5">
                <img class="w-75 "  src="{{asset('assets/image/product/product-1.png')}}">
                <div class="mt-5 text-left ">
                    <h2 class="text-blue mb-3">พื้นไม้ลามิเนต</h2>
                    <label class="line-height-30">ตัวแผ่นทำจากไม้อัดแน่นสูง(HDF) ผิวหน้าสวยงามด้วยลาไม้ (Decorative Paper) เคลือบด้วยชั้นป้องกันรอยขีดข่วนและความชื้นที่ผิวหน้า (Overlaying) พื้นไม้ลามิเนตมีความหนา
                    8 มิล และ 12 มิล
                    </label>
                    <br><br>
                    <a href="{{url('product')}}" class="text-blue f-14">ดูรายละเอียด</a>
                </div>
            </div> --}}
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
@section('script')
<script src="{{ asset('assets/js/web/front_category.js') }}"></script>

@endsection
