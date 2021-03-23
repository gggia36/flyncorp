<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use DataTables;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Category.category');
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

        $result = Category::select('category_id','category_name','category_description','category_image','category_status','created_at','updated_at')
        ->orderBy('created_at', 'DESC');

        // $page_title = $request->input('page_title');
        // $page_status = $request->input('page_status');

        // if ($page_title) {
        //     $result->where('menu_system_font_end_lang.menu_system_font_end_lang_name','LIKE','%'.$page_title.'%');
        // };

        // if($page_status == 'all'){
        //     $result->whereIn('menu_system_font_end.menu_system_font_end_status', [0, 1]);
        // }else if($page_status == '1'){
        //     $result->where('menu_system_font_end.menu_system_font_end_status', 1);
        // }else if($page_status == '0'){
        //     $result->where('menu_system_font_end.menu_system_font_end_status', 0);
        // }

        // $content = MenuSystemFontEnd::with('Join_MenuSetting', 'MenuSystemFontEndLang','MenuBannerSlide','MenuGallery')->find($id);
        // $result = MenuSystemFontEnd::with('MenuSystemFontEndLang')->get();
        // return $result;
        return Datatables::of($result)

        ->addColumn('created_at', function ($res) {
            $str = '<p> ' . ($res->created_at ? date("d/m/Y", strtotime($res->created_at)) : '-') . '</p>';
            return $str;
        })
        ->addColumn('updated_at', function ($res) {
            $str = '<p> ' . ($res->updated_at ? date("d/m/Y", strtotime($res->updated_at)) : '-')  . '</p>';
            return $str;
        })

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
            $btnView = ' <button type="button" class="btn waves-effect waves-light btn-info" data-id="'.$res->category_id.'">View</button>';

            $btnEdit = '<button type="button" class="btn waves-effect waves-light btn-warning" data-id="'.$res->category_id.'">Edit</button>';

            $btnDelete = '<button type="button" class="btn waves-effect waves-light btn-danger" data-id="'.$res->category_id.'">Delete</button>';
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
