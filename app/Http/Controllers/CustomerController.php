<?php

namespace App\Http\Controllers;
use App\Notifications\RequestNotification;
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
    public function catwiseBook($id)
    {
        $category = Category::find($id);
        $books = $category->books;
        $pivotTable = \DB::table('book_customer');
        // if($pivotTable->count() == 0)
        // {
        //     $permission = 0;
        // }
        
        return view('customer.viewCatwiseBooks',compact('books','category'));
    }

    public function requestBook($id)
    {
        // return $id;
        $book = Book::find($id);
        $category = $book->category;
        $recipient = Auth()->user();
        $recipient = $recipient->customer;
        $bookowner = User::find($book->user_id);
        $pivotTable = \DB::table('book_customer');
        
        // dd($pivotTable->count());
        // $pivotData =  \DB::table('book_customer')->where('book_id', $book->id)->where('customer_id', $recipient->id)->get();
        // foreach($pivotData as $data)
        //     {
        //         $permission = $data->hasPermission;
        //     }
        //     dd($permission);
        if($pivotTable->count() == 0) //first time DB == empty
        {
           
            $book->customers()->attach($recipient, ['hasPermission' => '0']);      
            $bookowner->notify(new RequestNotification($book, $recipient));
            // $clicks = 1;
            // return "done";
            $books = $category->books; 
            $permission = 0; 
            return view('customer.viewCatwiseBooks',compact('books','category'));
        }
        elseif($pivotTable->count() > 0)  //pivot has data
        {
            $book->customers()->attach($recipient, ['hasPermission' => '0']);      
            $bookowner->notify(new RequestNotification($book, $recipient));
            // return "done";
            $books = $category->books;
            $pivotData =  \DB::table('book_customer')->where('book_id', $book->id)->where('customer_id', $recipient->id)->get();
            foreach($pivotData as $data)
            {
                $permission = $data->hasPermission;
            }
             
            return view('customer.viewCatwiseBooks',compact('books','category'));

        }
        
        

    }
}
