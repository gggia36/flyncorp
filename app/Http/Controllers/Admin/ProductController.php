<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DataTables;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Facades\App;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['MainMenus'] = 'Propuct';
        $data['Category'] = Category::get();

        return view('admin.Product.product', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input_all = $request->all();
// return $input_all;
        $validator = Validator::make($request->all(), [

            ]);

            if (!$validator->fails()) {
                \DB::beginTransaction();
                try {

                        $Product = new Product;
                        $Product->product_name = $input_all['product']['product_name'];
                        $Product->product_price = $input_all['product']['product_price'];
                        $Product->product_description = $input_all['product']['product_description'];
                        $Product->product_size = $input_all['product']['product_size'];
                        $Product->product_status_fb_share = $input_all['product']['product_status_fb_share'];
                        $Product->product_status_line_share = $input_all['product']['product_status_line_share'];
                        $Product->product_status = $input_all['product']['product_status'];
                        $Product->category_id = $input_all['product']['category_id'];
                        $Product->save();
                        $product_id = $Product->getKey();

                        if(isset($input_all['product_image'])){
                            foreach($input_all['product_image'] as $keys_details => $value_details){
                                $ProductImage = new ProductImage;
                                $banner_file_segments = explode('/',$value_details['product_image']);
                                $banner_file_name = end($banner_file_segments);
                                $ProductImage->product_image  = $banner_file_name;
                                $ProductImage->sort  = $value_details['sort'];
                                $ProductImage->product_id = $product_id;
                                $ProductImage->save();
                            }

                        }

                    \DB::commit();
                    $return['status'] = 1;
                    $return['content'] = 'Success';
                } catch (Exception $e) {
                    \DB::rollBack();
                    $return['status'] = 0;
                    $return['content'] = 'Unsuccess';
                }
            }else{
                $failedRules = $validator->failed();
                $return['content'] = 'Unsuccess';
                if(isset($failedRules['ads_zone']['required'])) {
                    $return['status'] = 2;
                    $return['title'] = "Product is required";
                }
        }
            $return['title'] = 'Insert';


            return $return;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Product::with('Product_Image','Product_cate')->find($id);
        // $cate = Category::select('category.*','category.category_id as font_id')
        // ->with('Cate_Product')->join('product', 'product.category_id', 'category.category_id')->groupBy('font_id')->get();
        $return['status'] = 1;
        $return['title'] = 'Get Product';
        $return['content'] = $content;
        // $return['category'] = $cate;

        return $return;



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input_all = $request->all();
        // return $input_all;
        $validator = Validator::make($request->all(), [

            ]);

            if (!$validator->fails()) {
                \DB::beginTransaction();
                try {

                    $Product = Product::find($input_all['product']['product_id']);
                    $Product->product_name = $input_all['product']['product_name'];
                    $Product->product_price = $input_all['product']['product_price'];
                    $Product->product_description = $input_all['product']['product_description'];
                    $Product->product_size = $input_all['product']['product_size'];
                    $Product->product_status_fb_share = $input_all['product']['product_status_fb_share'];
                    $Product->product_status_line_share = $input_all['product']['product_status_line_share'];
                    $Product->product_status = $input_all['product']['product_status'];
                    $Product->category_id = $input_all['product']['category_id'];
                    $Product->save();

                    if(isset($input_all['product_image'])){
                        foreach($input_all['product_image'] as $keys_details => $value_details){
                                if(!empty($value_details['product_image_id'])){
                                    // return 'มีค่า'.$value_details['product_image_id'];
                                    $ProductImage = ProductImage::find($value_details['product_image_id']);
                                    $banner_file_segments = explode('/',$value_details['product_image']);
                                    $banner_file_name = end($banner_file_segments);
                                    $ProductImage->product_image  = $banner_file_name;
                                    $ProductImage->sort  = $value_details['sort'];
                                    $ProductImage->product_id = $input_all['product']['product_id'];
                                    $ProductImage->save();
                                }else{
                                    // return 'ไม่มีค่า' ;
                                    $ProductImage = new ProductImage;
                                    $banner_file_segments = explode('/',$value_details['product_image']);
                                    $banner_file_name = end($banner_file_segments);
                                    $ProductImage->product_image  = $banner_file_name;
                                    $ProductImage->sort  = $value_details['sort'];
                                    $ProductImage->product_id = $input_all['product']['product_id'];
                                    $ProductImage->save();
                                }
                        }

                    }


                    \DB::commit();
                    $return['status'] = 1;
                    $return['content'] = 'Success';
                } catch (Exception $e) {
                    \DB::rollBack();
                    $return['status'] = 0;
                    $return['content'] = 'Unsuccess';
                }
            }else{
                $failedRules = $validator->failed();
                $return['content'] = 'Unsuccess';
                if(isset($failedRules['ads_zone']['required'])) {
                    $return['status'] = 2;
                    $return['title'] = "ads zone is required";
                }
            }
            $return['title'] = 'Insert';
            return $return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::beginTransaction();
        try {
            $Product = Product::find($id);
            $Product->delete();
            $ProductImage = ProductImage::where('product_id',$id)->delete();

            \DB::commit();
            $return['status'] = 1;
            $return['content'] = 'Sucess';
        } catch (Exception $e) {
            \DB::rollBack();
            $return['status'] = 0;
            $return['content'] = 'Unsuccess';
        }
        $return['title'] = 'Delete';
        return $return;
    }
    public function lists(Request $request)
    {
        // $result = MenuSystemFontEnd::select('menu_system_font_end.*','menu_system_font_end.menu_system_font_end_id as font_id')->with('MenuSystemFontEndLang.Language')->orderBy('created_at', 'DESC')
        //     ->join('menu_system_font_end_lang', 'menu_system_font_end_lang.menu_system_font_end_id', 'menu_system_font_end.menu_system_font_end_id')
        //     ->join('languages', 'languages.languages_id', 'menu_system_font_end_lang.languages_id');
        //     $result->groupBy('font_id');

        $result = Product::select('product_id','product_name','category_id','product_status','created_at','updated_at')
        ->with(['Product_Image'])
        ->orderBy('created_at', 'DESC');

        $search_name_product = $request->input('search_name_product');
        $search_product_status = $request->input('search_product_status');

        if ($search_name_product) {
            $result->where('product.product_name','LIKE','%'.$search_name_product.'%');
        };

        if($search_product_status == 'all'){
            $result->whereIn('product.product_status', [0, 1]);
        }else if($search_product_status == '1'){
            $result->where('product.product_status', 1);
        }else if($search_product_status == '0'){
            $result->where('product.product_status', 0);
        }

        return Datatables::of($result)

        ->addColumn('created_at', function ($res) {
            $str = '<p> ' . ($res->created_at ? date("d/m/Y", strtotime($res->created_at)) : '-') . '</p>';
            return $str;
        })
        ->addColumn('updated_at', function ($res) {
            $str = '<p> ' . ($res->updated_at ? date("d/m/Y", strtotime($res->updated_at)) : '-')  . '</p>';
            return $str;
        })
        ->addColumn('product_image', function ($res) {
            if(!empty($res->Product_Image[0])){
                foreach($res->Product_Image as $val){
                    // return 'มีรูป';
                    $str = '<img onerror="$(this).attr(\'src\',\''.asset('/assets/uploads/images/no-image.jpg').'\')"  src="'.asset('/uploads/Product/'.$val['product_image']).'" class="img-thumbnail"  style="max-height: 280px; max-width: 250px;">';
                }
            }else{
                // return 'ไม่มีรูป';

                $str = '<img src="'.asset('/assets/uploads/images/no-image.jpg').'" class="img-thumbnail"  style="max-height: 280px; max-width: 250px;"> ';

            }
            return  $str;
        })
        ->addColumn('action' , function($res){
            $view = '';
            $insert = '';
            $update = '';
            $delete = '';
            if($res->product_status == 1){
                $checked = 'checked';
            }else{
                $checked = '';
            }
            $btnStatus = '<input type="checkbox" class="toggle change-status" '.$checked.'  data-id="'.$res->product_id.'"   data-style="ios" data-on="On" data-off="Off">';
                // $btnStatus = '<div class="form-group row custom-switch ">
                //                     <input type="checkbox" class="custom-control-input chang=status " '.$checked.' data-id="'.$res->menu_system_font_end_id.'">
                //                     <label class="custom-control-label col-sm-3" for="status-share_bt-edit"></label>
                //                 </div>';
            $btnView = ' <button type="button" class="btn waves-effect waves-light btn-info btn-view" data-id="'.$res->product_id.'">View</button>';

            $btnEdit = '<button type="button" class="btn waves-effect waves-light btn-warning btn-edit" data-id="'.$res->product_id.'">Edit</button>';

            $btnDelete = '<button type="button" class="btn waves-effect waves-light btn-danger btn-delete" data-id="'.$res->product_id.'">Delete</button>';
            $str = '';
                $str.=' '.$btnStatus;
                $str.=' '.$btnView;
                $str.=' '.$btnEdit;
                $str.=' '.$btnDelete;

            return $str;
        })
        ->addIndexColumn()
        ->rawColumns(['action','created_at','updated_at','product_image'])
        ->make(true);
    }

    public function ChangeStatus(Request $request, $id)
    {
        \DB::beginTransaction();
        try {
            $Product = Product::find($id);
            $Product->product_status = $request->input('status');
            $Product->save();
            \DB::commit();
            $return['status'] = 1;
            $return['content'] = 'Success';
        } catch (Exception $e) {
            \DB::rollBack();
            $return['status'] = 0;
            $return['content'] = 'Unsuccess';
        }
        $return['title'] = 'Update Status';
        return $return;
    }

}
