<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Validator;  //この1行だけ追加！

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('created_at', 'asc')->get();
         return view('books', ['books' => $books]);
         
        // $books = Book::get();
        // return view('books', compact('books'));
        
        // $books = Book::get();
        // return view('books', ['books' =>
        // $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //バリデーション
    $validator = Validator::make($request->all(), [
         'item_name' => 'required|min:3|max:255',
         'item_address1' => 'required',
         'item_address2' => 'required',
         'item_structure' => 'required',
         'item_usage' => 'required',
         'img_path' => 'required',
         'published'   => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    
    // 画像フォームでリクエストした画像を取得
        $img = $request->file('img_path');

        // 画像情報がセットされていれば、保存処理を実行
        if (isset($img)) {
            // storage > public > img配下に画像が保存される
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            // if ($path) {
            //     // DBに登録する処理
            //     Book::create(['img_path' => $path]);
            // }
        }
        // $books->save(); 
        // return redirect('/');
  
        // //　リダイレクト
        // return redirect()->route('book.index');

    //以下に登録処理を記述（Eloquentモデル）
    // Eloquentモデル
  $books = new Book;
  $books->item_name   = $request->item_name;
  $books->item_address1 = $request->item_address1;
  $books->item_address2 = $request->item_address2;
  $books->item_structure = $request->item_structure;
  $books->item_usage = $request->item_usage;
//   $books->img_path = $request->img_path;
  $books->img_path = $request->file('img_path');
  $books->published   = $request->published;
  $books->item_select1   = $request->item_select1;
  $books->item_select2   = $request->item_select2;
  $books->item_select3   = $request->item_select3;
  $books->save(); 
  return redirect('/');
  
  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
          $book->delete();       //追加
          return redirect('/');  //追加
    }
}
