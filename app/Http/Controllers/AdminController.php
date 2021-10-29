<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class AdminController extends Controller
{
    //trang dashboard....continue....
    public function dashboard(){
        return view('admin/dashboard');
    }

    // call form login
    public function login(){
        return view('admin/admin_login');
    }
    //thuc hien login
    public function signin(Request $request){
        $admin_email = $request -> admin_email;
        $admin_password = md5($request -> admin_password);
        $user = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($user!=null){
            Session::put('admin_name', $user->admin_name);
            Session::put('admin_id', $user->admin_id);
            return redirect()->route('admin-dashboard'); 
        }else{
            Session::put('message', 'Login Failed!!');
            return redirect()->route('admin-login');
        }
    }

    // log-out
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return redirect()->route('admin-login');
    }

}
