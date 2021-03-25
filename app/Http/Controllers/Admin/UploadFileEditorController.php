<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Storage;



class UploadFileEditorController extends Controller
{
    public function UploadImage(Request $request, $folder)
	{
		$str= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwzyz';
		$random_number = time().'-'.str_shuffle($str);
		$type = $request->file->extension();

		$request->file->storeAs($folder,$random_number.'.'.$type, 'uploads');

		return response()->json(['success' => true, "link" => asset('uploads/EditorImageTemp/'.$random_number.'.'.$type)  ],200);
	}
	public function getImageManager(Request $request)
	{
		$arr = array();
		$url_temp = public_path('uploads/EditorImageTemp');

		$file_name_all = $this->readDir($url_temp);
		if ($file_name_all) {
			foreach ($file_name_all as $key=>$val) {
				$data_pic = explode('/', $val);
				$cout_path = count($data_pic);
				$pic_name =  $data_pic[$cout_path - 1];

				$params['url'] = asset('uploads/EditorImageTemp/'.$pic_name);
				$params['thumb'] = asset('uploads/EditorImageTemp/'.$pic_name);
				$params['name'] = $pic_name;
				$params['id'] = $pic_name;

				array_push($arr,$params);
			}
		}

		return response()->json( $arr,200);
	}
	public function deleteImageManager(Request $request, $image)
	{
		$file_name = $request->name;
		$url_temp = public_path('uploads/EditorImageTemp');

		unlink($url_temp . '/' . $file_name);
		return 'success';
	}

	public function readDir($dir)
    {
        $dirs = array($dir);
        $files = array();
        for ($i = 0;; $i++) {
            if (isset($dirs[$i]))
                $dir =  $dirs[$i];
            else
                break;

            if ($openDir = @opendir($dir)) {
                while ($readDir = @readdir($openDir)) {
                    if ($readDir != "." && $readDir != "..") {

                        if (is_dir($dir . "/" . $readDir)) {
                            $dirs[] = $dir . "/" . $readDir;
                        } else {
                            $files[] = $dir . "/" . $readDir;
                        }
                    }
                }
            }
        }

        return $files;
    }
}
