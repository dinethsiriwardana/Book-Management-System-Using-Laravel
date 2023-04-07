<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Exception;

use Illuminate\Http\Request;

class BookControllers extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addbook(Request $request)
    {
        $book = new Book();
        $book->bookname = $request->input('bookname');
        $book->authorname = $request->input('authorname');
        $book->price = $request->input('price');
        $book->save();


        // $book = DB::table('book')->get();
        $book = Book::all();

        return view('home', ['bookdata' => $book]);
    }

    public function deletebook($id)
    {
        // $book = DB::table('book')->where('id', $id)->delete();

    
        
        $book = Book::find($id);
        $book->delete();

        $book = Book::all();
        return view('home', ['bookdata' => $book]);


    }

    public function updatebookshow($id)
    {
        $book = Book::find($id);
        return view('update', ['bookdata' => $book]);
    }

    public function updatebook(Request $request, $id)
    {
        $book = Book::find($id);
        $book->bookname = $request->input('bookname');
        $book->authorname = $request->input('authorname');
        $book->price = $request->input('price');
        $book->save();

        $book = Book::all();
        return view('home', ['bookdata' => $book]);
    }
}
