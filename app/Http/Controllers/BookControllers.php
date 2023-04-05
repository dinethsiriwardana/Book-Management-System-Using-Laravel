<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;


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


        $book = DB::table('book')->get();

        return view('home', ['bookdata' => $book]);
    }
}
