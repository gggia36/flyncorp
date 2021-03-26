<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\AdminUser;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function check_login(Request $request){
        DB::beginTransaction();
        try{
            $request->validate([
                'username' => 'required|exists:admin_user,username',
                'password' => 'required'
            ]);
            $admin_user = AdminUser::where('username',$request->username)->first();
            if($admin_user){
                if (Hash::check( $request->password,$admin_user->password)) {
                    $admin_user->last_login = now();
                    $admin_user->save();
                    DB::commit();
                    Session::put('session_login',$admin_user->admin_id);
                    return response()->json(['success' => true,'message' => 'Successful'],200);
                }else{
                    DB::rollBack();
                    return response()->json(['success' => false,'message' => 'Cannot login, please check your password'],200);
                }
            }
            DB::rollBack();
            return response()->json(['success' => false,'message' => 'Cannot login, please check your username or password'],200);
        }catch(\Exception $e){
            dd($e->getMessage());
            DB::rollBack();
            return response()->json(['success' => false,'message' => 'Cannot login, please check your username or password'],200);
        }
    }
    public function Logout(Request $request){
        Session::flush();
        return redirect('/admin/login');
    }
}
