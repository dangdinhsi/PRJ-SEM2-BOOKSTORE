<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
Use \Carbon\Carbon;
session_start();
class CategoryController extends Controller
{
    public function list_category()
    {
        $listCategory = DB::table('category')->get();
        return view('admin/list_category')->with('list',$listCategory);
    }

     public function add_category()
    {
        return view('admin/add_category');
    }
    public function save_category(Request $request)
    {
        $data = array();
        $data['category_name'] = $request -> category_name;
        $data['category_desc'] = $request -> category_desc;
        $data['category_status'] = $request -> category_status;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
            DB::table('category')->insert($data);
            Session::put('Mymessage', 'Thêm danh mục thành công!');
           return redirect()->route('list-category');
    }


    public function edit_category(Request $request)
    {
        $currenCategory = DB::table('category')->where('category_id',$request ->category_id)->first();
        return view('admin/edit_category')->with('currenCategory',$currenCategory);
    }
    public function update_category(Request $request)
    {
        $status = $request -> category_status;
        if($status ==""){
            $status = 0;
        }
        $data = array();
        $data['category_name'] = $request -> category_name;
        $data['category_desc'] = $request -> category_desc;
        $data['category_status'] = $status;
        $data['created_at'] = $request -> created_at;
        $data['updated_at'] = Carbon::now();
        DB::table('category')->where('category_id',$request -> category_id)->update($data);
        return redirect()->route('list-category');
    }
    public function delete_category(Request $request)
    {
        DB::table('category')->where('category_id',$request -> category_id)->delete();
    }
}
