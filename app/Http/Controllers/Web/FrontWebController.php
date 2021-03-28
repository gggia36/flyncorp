<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

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
}
