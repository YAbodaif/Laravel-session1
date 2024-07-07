<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
    public function index(){
        // $x=Book::get();
        $x=Book::orderBy('id','DESC') ->Paginate(3);
        //paginate(2)
        // cursorPaginate(2)

        // dd($x);
        return view("books.index",compact("x"));
    }
    public function show($id){
        $x=Book::findOrFail($id);
        return  view('books.show',compact('x'));
    }
    public function create(){
        return view('books.create');

    }
    public function store(Request $request){
        
        Book::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
        return redirect(route('books_index'));

        // dd($request->all());
    }
    public function edit($id){
        $x=Book::findOrFail($id);
        return view('books.edit',compact('x'));

    }
    public function update(Request $request){

        Book::where('id','=', $request->id)->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
        return redirect(route('books_index'));
    }

    public function delete($id){

        Book::where('id','=', $id)->delete();
        return redirect(route('books_index'));
    }
}
