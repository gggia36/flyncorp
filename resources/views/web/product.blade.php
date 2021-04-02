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
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold">{{$cate_product->category_name}}</h1>
                <p>{{$cate_product->category_short_description}}</p>
            </div>
        </div>
        <div class="row">
        	<div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <p class="f-14 ">เรียงตาม</p>
                    </div>
                    <div class="col-8 mx-4">
                        @php
                            $selected = isset($filter_type) ? $filter_type : '';
                        @endphp
                        <select id="Filter_product" class="filter">
                            <option value="1" {{$selected == '' || $selected == 1 ? 'selected' : ''}} data-link="{{url('category')}}{{'/'.$cate_product->category_id}}/filter/1">อัพเดทล่าสุด</option>
                            <option value="2" {{$selected == 2 ? 'selected' : ''}} data-link="{{url('category')}}{{'/'.$cate_product->category_id}}/filter/2">ราคาสูงสุด </option>
                            <option value="3" {{$selected == 3 ? 'selected' : ''}} data-link="{{url('category')}}{{'/'.$cate_product->category_id}}/filter/3">ราคาต่ำสุด</option>
                        </select>

                    </div>
                </div>
        	</div>
        	<div class="col-6 text-right">
        		 <p class="f-14 py-2 mb-0" id="sum_cate">พบสินค้า {{isset($Product) ? $Product->total() : 0}} ชิ้น</p>
        	</div>
        </div>
        <div class="row mt-5" id="show_product_category">
            @if (isset($Product) && count($Product))
                @foreach ($Product as $product)
                <div class="col-lg-3 col-md-6 col-6 ">
                    <a href="{{url('category')}}{{'/'.$cate_product->category_id}}/{{'product/'.$product->product_id}}">
                        <div class="img-hover-zoom">
                            <img class="w-100 img" style="height: 255px;" src="{{asset('uploads/Product/'.$product->Product_Image[0]->product_image)}}"  onerror="this.src=`{{asset('assets/uploads/images/no-image.jpg')}}`;" >
                        </div>
                        <div class="card-block">
                            <h5 class="fixed-text-1 text-blue">{{$product->product_name}}</h5>
                            <small class="color-888">{{$product->product_size}}</small>
                            <br><br>
                            <p class="text-blue">฿ {{$product->product_price}} </p>
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
        </div>
        <div class="float-right">
            @if (isset($Product) && count($Product))
            {{ $Product->links() }}
            @endif
        </div>
    </div>
</section>

@endsection
@section('script')
<script src="{{ asset('assets/js/web/product_category.js') }}"></script>

@endsection
