<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

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
        $data['Product'] = Product::find($id)->orderBy('created_at', 'desc')->get();
        $data['cate_product'] = Category::where('category_id', $id)->first();

        return view('web.product', $data);
    }
    public function show_category_details_product(Request $request,$id)
    {
        return Product::find($id)->with(['Product_Image'])
        ->orderBy('created_at', 'DESC')->get();

    }

    public function show_category_details_product_details(Request $request,$id,$id_detail)
    {
        $data['Product'] = Product::find($id)->orderBy('created_at', 'desc')->get();


        return view('web.product_detail', $data);

    }

    // public function ProductDetail_show(Request $request,$id)
    // {
    //     $data['product_detail'] = Product::where('product_id', $id)->first();

    //     return view('web.product_detail', $data);

    // }


}
