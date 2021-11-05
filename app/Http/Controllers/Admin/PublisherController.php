<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function list_publisher()
    {
        $publishers =  Publisher::all();
        if($publishers !=null){
            return view('admin.publisher.list',compact('publishers'));
        }
    }
}
