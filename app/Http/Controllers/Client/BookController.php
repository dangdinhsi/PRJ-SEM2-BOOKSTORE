<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    //phan view home
    public function home()
    {
        $categories = DB::table('category')->get();
        return view("pages/home",compact('categories'));
    }
    public function books_by_category($category_id){
        dd(1);
    }
}
