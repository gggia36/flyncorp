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
        return view('web.product_category');

        // $content = Category::find($id);
        // $return['status'] = 1;
        // $return['title'] = 'Get Catgory';
        // $return['content'] = $content;
        // return $return;
    }
    public function get_data_all_category(Request $request)
    {
        return Category::where('category_status',1)->orderBy('created_at', 'DESC')->get();
    }

    public function show_category_details(Request $request, $id, $filter_type = '')
    {
        $data['filter_type'] = $filter_type;
        $data['cate_product'] = Category::where('category_id', $id)->first();
        if($filter_type == 1 || !$filter_type){
            $data['Product'] = Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image' => function($query){
                $query->select('product_image_id','product_id','product_image','sort')->where('sort', 1);
            }])
            ->orderBy('created_at', 'DESC')->paginate(3);
        }else if($filter_type == 2){
            $data['Product'] = Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image' => function($query){
                $query->select('product_image_id','product_id','product_image','sort')->where('sort', 1);
            }])
            ->orderBy('product_price', 'DESC')->paginate(3);
        }else if($filter_type == 3){
            $data['Product'] = Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image' => function($query){
                $query->select('product_image_id','product_id','product_image','sort')->where('sort', 1);
            }])
            ->orderBy('product_price', 'ASC')->paginate(3);
        }
        return view('web.product', $data);
    }
    public function show_category_details_product(Request $request,$id)
    {
        return Product::find($id)->with(['Product_Image'])
        ->orderBy('created_at', 'DESC')->get();

    }

    public function get_data_category_details(Request $request,$id)
    {
        if($request->filter == 1){
            return Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image'])
            ->orderBy('created_at', 'DESC')->get();

        }if($request->filter == 2){
            return Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image'])
            ->orderBy('product_price', 'DESC')->get();

        }if($request->filter == 3){
            return Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image'])
            ->orderBy('product_price', 'ASC')->get();

        }



        else{
            return Product::where('category_id',$id)->where('product_status',1)->with(['Product_Image'])
            ->orderBy('created_at', 'DESC')->get();
        };

    }



    public function show_category_details_product_details(Request $request,$id,$id_product)
    {
        $data['product_detail'] = Product::where('product_id', $id_product)->first();
        $data['metaog'] = Product::with(['Product_Image'])
        ->where('product.product_id', $id_product)
        ->first();
        $data['url'] = $request->fullUrl();
        $data['url_img'] = $request->getHttpHost();



        return view('web.product_detail', $data);

    }
    public function get_data_category_details_product_details(Request $request,$id_product)
    {
        // return Product::with(['Product_Image'])->where('product_id', $id_product)->orderBy('product_image.sort', 'desc')->first();

        $result = Product::select('product.*','product.product_id as font_id')->with('Product_Image','Product_cate')
        ->join('product_image', 'product_image.product_id', 'product.product_id')
        ->join('category', 'category.category_id', 'product.category_id')
        ->where('product.product_id',$id_product)

        ->groupBy('font_id')
        // ->orderBy('product__image.sort', 'DESC')

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
