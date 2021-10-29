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
        $defaultURL="";
        if($request->photo == null){
            $defaultURL ="https://www.allianceplast.com/wp-content/uploads/no-image.png";
        }
        $images = $request->photo;
        $myUrl  = explode('/', $images[0])[2].'/'.explode('/', $images[0])[3];
        $defaultURL= $domain.$myUrl;
         $data = array();
            $data['author_name'] = $request -> author_name;
            $data['author_desc'] = $request -> author_desc;
            $data['author_url'] = $defaultURL;
            $data['author_status'] = 1;
            $data['created_at'] = Carbon::now();
            $data['updated_at'] = Carbon::now();
            DB::table('author')->insert($data);
            Session::put('Mymessage', 'Thêm tác giả thành công!');
           return redirect()->route('list-author');
    }

    public function delete_author(Request $request)
    {
        DB::table('author')->where('author_id',$request -> author_id)->delete();
    }

}
