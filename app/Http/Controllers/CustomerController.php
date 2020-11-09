<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function dashboard()
    {
        $user = User::auth();
        $books = Book::where('user_id', '=', $user->id);   
        return view('customer.index',compact('books'));
    }
    
   public function deleteBook(Request $request)
   {
        $book = Book::find($request->bookID);
        $book->delete();
        $book->save();
   }
}
