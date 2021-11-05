<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class BookController extends Controller
{
    public function list_book(){
        $books = DB::table('books')
            ->join('category','category.category_id','books.category_id')
            ->join('author','author.author_id','books.author_id')
            ->join('publishers','publishers.id','books.publisher_id')->orderby('books.id','desc')->get();
                if($books!=null){
            return view('admin.book.list',compact('books'));
        }
    }
    public function create_book(){
        $categories = DB::table('category')->get();
        $authors = DB::table('author')->get();
        $publishers = DB::table('publishers')->get();
        if(isset($categories) && isset($authors) && isset($publishers)){
            return view('admin.book.create',compact('categories','authors','publishers'));
        }
    }
    public function save_book(Request $request){
        $book = new Book();
        $this -> validate($request, [
            'photo' =>'required',
            'book_name' =>'required',
            'description' =>'required',
            'category_id'=>'required',
            'author_id'=>'required',
            'publisher_id'=>'required',
        ],[
            'photo.required' =>'Ảnh bìa là bắt buộc',
            'book_name.required' =>'Không thể để trống trường này!',
            'description.required' =>'Không thể để trống trường này!',
            'category_id.required' =>'Không thể để trống trường này!',
            'author_id.required' =>'Không thể để trống trường này!',
            'publisher_id.required' =>'Không thể để trống trường này!',
        ]);
        $array = $request->photo;
        $arrdefault = [];
        foreach ($array as $item){
            $array2 = explode('/',$item);
            $value_ = explode('.',$array2[3])[0];
            array_push($arrdefault,$value_);
        }
        $UrlDefault = join(';',$arrdefault);
        $book->book_name = $request->book_name;
        $book->description = $request->description;
        $book->category_id = $request->category_id;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->status = 1;
        $book->images =  $UrlDefault;
        $book->created_at =  $book->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $book->save();
        return redirect()->route('admin.list_book');
    }
    public function edit_book(Request $request,$id){
        $categories = DB::table('category')->get();
        $authors = DB::table('author')->get();
        $publishers = DB::table('publishers')->get();
        $book = Book::find($id);
        $arr = explode(';',$book->images);
        if(isset($book)){
            return view('admin.book.edit',compact('book','categories','authors','publishers','arr'));
        }
    }

}
