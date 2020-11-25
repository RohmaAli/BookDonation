<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Auth;
use App\Category;
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
        $count = $books->count();  
        return view('customer.index',compact('books', 'count'));
    }
    public function catwiseBook($id)
    {
        $category = Category::find($id);
        $books = $category->books;
        return view('customer.viewCatwiseBooks',compact('books','category'));
    }
   
   public function category()
   {
       $categories = Category::all();
       return view('customer.categories', compact('categories'));
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

   public function viewAddBook()
   {    
       $categories = Category::all();
        return view('customer.viewAddBook', compact('categories'));

       
       
   }

   public function storeBook(Request $request)
    {
        // return $request;
        
       
            $book = new Book();
            $book->uuid = (string)Uuid::generate();
            $user = Auth::user();
            $book->user_id = $user->id;
            $category = Category::find($request->cat);
    
            $book->title = $request->title;
            if ($request->hasFile('cover')) 
            {
                $book->cover = $request->cover->getClientOriginalName();
                $request->cover->storeAs('books', $book['cover']);
            }
            $book->save();
            $category->books()->save($book);
            return redirect()->route('myBooks');
       
        // elseif($request->search != null)
        // {
        //     $books = Book::all();

        //     $search = \Request::get('search');  
        
        //     $books = Book::where('title','like','%'.$search.'%')
        //         ->orderBy('title')
        //         ->paginate(20);
        
        //         return redirect()->route('myBooks');
        
        // }
        
    }

    public function downloadBook($uuid)
    {
        $book = Book::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/books/' . $book->cover);
        return response()->download($pathToFile);

    }

    public function deleteBook($id)
    {
        $book = Book::find($id);
        // return $book;
      $book->delete();
      return redirect()->route('myBooks');
    }

    public function requestBook($id)
    {
        // return $id;
        $book = Book::find($id);
        
        return $book->user_id;

    }
}
