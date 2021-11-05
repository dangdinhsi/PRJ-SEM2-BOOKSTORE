<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
Use \Carbon\Carbon;
session_start();
class AuthorController extends Controller
{
    public function list_author()
    {
        $listAuthor = DB::table('author')->get();
        return view('admin/list_author')->with('list',$listAuthor);
    }
    public function add_author()
    {
        return view('admin/add_author');
    }
    public function save_author(Request $request)
    {
        $domain = "https://res.cloudinary.com/siddd00474/image/upload/c_limit,h_100,w_100/";
        $UrlDefault="";
        $request->validate([
            'author_name' => 'required',
            'author_desc' => 'required',
            'photo' => 'required',
        ],[
            'author_name.required' => 'Vui lòng điền tên tác giả !',
            'author_desc.required' => 'Thông tin là bắt buộc !',
            'photo.required' => 'Vui lòng chọn ảnh đại diện!'
        ]);
        $array = $request->photo;
        $arrdefault = [];
        foreach ($array as $item){
            $array2 = explode('/',$item);
            $value_ = explode('.',$array2[3])[0];
            array_push($arrdefault,$value_);
        }
        $UrlDefault = join(';',$arrdefault);
         $data = array();
            $data['author_name'] = $request -> author_name;
            $data['author_desc'] = $request -> author_desc;
            $data['author_url'] = $UrlDefault;
            $data['author_status'] = 1;
            $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
            $data['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh');
            DB::table('author')->insert($data);
            Session::put('Mymessage', 'Thêm tác giả thành công!');
           return redirect()->route('list-author');
    }
    public function edit_author(Request $request,$author_id){
       $author = DB::table('author')->where('author_id',$author_id)->first();
        $arr = explode(';',$author->author_url);
       return view("admin.edit_author",compact('author','arr'));
    }
    public function update_author(Request $request,$author_id){
        $request->validate([
            'author_name' => 'required',
            'author_desc' => 'required',
            'photo' => 'required',
        ],[
            'author_name.required' => 'Vui lòng điền tên tác giả !',
            'author_desc.required' => 'Thông tin là bắt buộc !',
            'photo.required' => 'Vui lòng chọn ảnh đại diện!'
        ]);
        $array = $request->photo;
        $arrdefault = [];
        foreach ($array as $item){
            $array2 = explode('/',$item);
            $value_ = explode('.',$array2[3])[0];
            array_push($arrdefault,$value_);
        }
        $UrlDefault = join(';',$arrdefault);
        $data = array();
        $data['author_name'] = $request -> author_name;
        $data['author_desc'] = $request -> author_desc;
        $data['author_status'] = $request -> author_status;
        $data['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $data['author_url'] = $UrlDefault;
        DB::table('author')->where('author_id',$author_id)->update($data);
        return redirect()->route('list-author');
    }

    public function delete_author(Request $request)
    {
        DB::table('author')->where('author_id',$request -> author_id)->delete();
    }

}
