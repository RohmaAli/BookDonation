<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function dashboard()
    {
        $user = auth()->user();
        $books = Book::where('user_id', '=', $user->id);   
        return view('customer.index',compact('books'));
    }
    
   public function deleteBook(Request $request)
   {
        $book = Book::find($request->bookID);
        $book->delete();
        $book->save();
   }

   public function category()
   {
       $books = Book::all();
       return view('customer.categories', compact('books'));
   }

   public function myBooks()
   {
    $user = auth()->user();
    $books = Book::where('user_id', '=', $user->id)->get();
    // return $books;
    return view('customer.myBooks', compact('books'));
   }

   public function create()
   {
       return view('books.create');
   }
}
