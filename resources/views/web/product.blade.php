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
                <input type="hidden" id="category_id" value="{{$cate_product->category_id}}">
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold">บันไดสำเร็จรูป</h1>
                <p>บันไดสำเร็จรูปที่เป็นที่นิยมใช้ในปัจจุบันแบ่งออกเป็นสองชนิด คือบันไดไม้จริง กับบันไดไม้สังเคราะห์</p>
            </div>
        </div>
        <div class="row">
        	<div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <p class="f-14 ">เรียงตาม</p>
                    </div>
                    <div class="col-8 mx-4" >
                        <select id="Filter_product"  class="filter">
                            <option value="1">อัพเดทล่าสุด</option>
                            <option value="2">ราคาสูงสุด </option>
                            <option value="3">ราคาต่ำสุด</option>
                        </select>

                    </div>
                </div>
        	</div>
        	<div class="col-6 text-right">
        		 <p class="f-14 py-2 mb-0">พบสินค้า 19 ชิ้น</p>
        	</div>
        </div>
        <div class="row mt-5" id="show_product_category">

        </div>
    </div>
</section>

@endsection
@section('script')
<script src="{{ asset('assets/js/web/product_category.js') }}"></script>

@endsection
