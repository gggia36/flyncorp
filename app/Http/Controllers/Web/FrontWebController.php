<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class FrontWebController extends Controller
{
    public function show_all_category(Request $request)
    {
        return Category::get();
        // $content = Category::find($id);
        // $return['status'] = 1;
        // $return['title'] = 'Get Catgory';
        // $return['content'] = $content;
        // return $return;
    }

    public function show_category_details(Request $request,$id)
    {
        $data['Product'] = Product::where('category_id',$id)->orderBy('created_at', 'desc')->get();
        $data['cate_product'] = Category::where('category_id', $id)->first();

        return view('web.product', $data);
    }
    public function show_category_details_product(Request $request,$id)
    {
        return Product::find($id)->with(['Product_Image'])
        ->orderBy('created_at', 'DESC')->get();

    }

    public function get_data_category_details(Request $request,$id)
    {
        return Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image'])
        ->orderBy('created_at', 'DESC')->get();
    }



    public function show_category_details_product_details(Request $request,$id,$id_product)
    {
        $data['product_detail'] = Product::where('product_id', $id_product)->first();
        return view('web.product_detail', $data);

    }
    public function get_data_category_details_product_details(Request $request,$id_product)
    {
        // return Product::with(['Product_Image'])->where('product_id', $id_product)->orderBy('product_image.sort', 'desc')->first();

        $result = Product::select('product.*','product.product_id as font_id')->with('Product_Image','Product_cate')->orderBy('created_at', 'DESC')
        ->join('product_image', 'product_image.product_id', 'product.product_id')
        ->join('category', 'category.category_id', 'product.category_id')

        ->where('product.product_id',$id_product)
        ->groupBy('font_id')

        ->get();
        return $result;
    }


    public function get_data_product_all(Request $request,$id)
    {
        return Product::with(['Product_Image'])
        ->where('product.product_id' ,'!=', $id)
        ->where('product.product_status',1)
        ->limit(4)
        ->inRandomOrder()
        ->get();

        // $result = Product::select('product.*','product.product_id as font_id')->with('Product_Image')
        // ->join('product_image', 'product_image.product_id', 'product.product_id')
        // ->where('product.product_id' ,'!=', $id)
        // ->where('product.product_status',1)
        // // ->inRandomOrder()
        // // ->limit(4)
        // ->groupBy('font_id')

        // ->get();

        // return $result;


    }


}
