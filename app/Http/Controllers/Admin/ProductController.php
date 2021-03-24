<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DataTables;

use App\Models\Product;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function lists(Request $request)
    {
        // $result = MenuSystemFontEnd::select('menu_system_font_end.*','menu_system_font_end.menu_system_font_end_id as font_id')->with('MenuSystemFontEndLang.Language')->orderBy('created_at', 'DESC')
        //     ->join('menu_system_font_end_lang', 'menu_system_font_end_lang.menu_system_font_end_id', 'menu_system_font_end.menu_system_font_end_id')
        //     ->join('languages', 'languages.languages_id', 'menu_system_font_end_lang.languages_id');
        //     $result->groupBy('font_id');

        $result = Product::select('product_id','product_name','category_id','product_image','product_status','created_at','updated_at')
        ->orderBy('created_at', 'DESC');

        // $search_name_category = $request->input('search_name_category');
        // $search_category_status = $request->input('search_category_status');

        // if ($search_name_category) {
        //     $result->where('category.category_name','LIKE','%'.$search_name_category.'%');
        // };

        // if($search_category_status == 'all'){
        //     $result->whereIn('category.category_status', [0, 1]);
        // }else if($search_category_status == '1'){
        //     $result->where('category.category_status', 1);
        // }else if($search_category_status == '0'){
        //     $result->where('category.category_status', 0);
        // }

        return Datatables::of($result)

        ->addColumn('created_at', function ($res) {
            $str = '<p> ' . ($res->created_at ? date("d/m/Y", strtotime($res->created_at)) : '-') . '</p>';
            return $str;
        })
        ->addColumn('updated_at', function ($res) {
            $str = '<p> ' . ($res->updated_at ? date("d/m/Y", strtotime($res->updated_at)) : '-')  . '</p>';
            return $str;
        })
        // ->addColumn('category_image', function ($res) {
        //     return '<img  onerror="$(this).attr(\'src\',\''.asset('/assets/uploads/images/no-image.jpg').'\')"  src="'.asset('/uploads/Category/'.$res->category_image).'" style="max-height: 280px; max-width: 250px;">';
        // })

        ->addColumn('action' , function($res){
            $view = '';
            $insert = '';
            $update = '';
            $delete = '';
            if($res->category_status == 1){
                $checked = 'checked';
            }else{
                $checked = '';
            }
            $btnStatus = '<input type="checkbox" class="toggle change-status" '.$checked.'  data-id="'.$res->category_id.'"   data-style="ios" data-on="On" data-off="Off">';
                // $btnStatus = '<div class="form-group row custom-switch ">
                //                     <input type="checkbox" class="custom-control-input chang=status " '.$checked.' data-id="'.$res->menu_system_font_end_id.'">
                //                     <label class="custom-control-label col-sm-3" for="status-share_bt-edit"></label>
                //                 </div>';
            $btnView = ' <button type="button" class="btn waves-effect waves-light btn-info btn-view" data-id="'.$res->category_id.'">View</button>';

            $btnEdit = '<button type="button" class="btn waves-effect waves-light btn-warning btn-edit" data-id="'.$res->category_id.'">Edit</button>';

            $btnDelete = '<button type="button" class="btn waves-effect waves-light btn-danger btn-delete" data-id="'.$res->category_id.'">Delete</button>';
            $str = '';
                $str.=' '.$btnStatus;
                $str.=' '.$btnView;
                $str.=' '.$btnEdit;
                $str.=' '.$btnDelete;

            return $str;
        })
        ->addIndexColumn()
        ->rawColumns(['action','created_at','updated_at'])
        ->make(true);
    }
}
