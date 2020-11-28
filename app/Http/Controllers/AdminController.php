<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Webpatser\Uuid\Uuid;
use App\Book;
use App\User;
use Auth;
use Carbon;
use DB;
use App\Customer;
class AdminController extends Controller
{
  public function admin()
  {
    return view ('admin.master');
  }
  public function index()
  {
    return view ("admin.index");
  }
  public function mailbox()
  {
    return view ("admin.mailbox");
  }
  public function category()
  {
    $categories = Category::paginate(5);
    return view ("admin.category", compact('categories'));
  }
  public function books()
  {
    $books = Book::paginate(5);
    return view ("admin.books", compact('books'));
  }
  public function slider()
  {
    return view ("admin.slider");
  }
  public function user()
  {
    return view ("admin.user");
  }

  public function addCategoryPage()
  {
    return view("admin.addCategory");
  }

  public function storeCategory(Request $request)
  {
    // return $request;
    $cat = new Category();
    $cat->title = $request->ctitle;
    $cat->description = $request->description;
    $cat->save();
    return redirect()->route('category');
  }

  public function catActions(Request $request)
  {
    if($request->edit != null)
    {
      $category = Category::find($request->edit);
      return view('admin.editCategory', compact('category'));
    }
    elseif($request->delete != null)
    {
      $category = Category::find($request->delete);
      $category->delete();
      return redirect()->route('category');
    }
  }

  public function editCategory(Request $request)
  {
    $category = Category::find($request->editCat);
    $category->title = $request->ctitle;
    $category->save();
    return redirect()->route('category');


  }
  public function viewAddBookAdmin()
   {    
    $categories = Category::all();
        return view('admin.viewAddBook', compact('categories'));
   }
  public function storeBookAdmin(Request $request)
  {
    
        $book = new Book();
        $book->uuid = (string)Uuid::generate();
        $user = Auth::user();
        $book->user_id = $user->id;
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
        return redirect()->route('allBooks');
    
  }

  public function deleteBookAdmin($id)
  {
      $book = Book::find($id);
      $book->delete();
      return redirect()->route('allBooks');
  }

  public function downloadBookAdmin($uuid)
    {
        $book = Book::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/books/' . $book->cover);
        return response()->download($pathToFile);

    }

    public function viewRequestAdmin()
    {
      return view('admin.viewRequest');
    }

    public function requestAction(Request $request)
    {
      if($request->allow)
      {
        $book = Book::find($request->allow);
        $customer = Customer::find($request->cid);
        $book->customers()->attach($customer, ['hasPermission' => '1']);      

        $pivotTable = \DB::table('book_customer');
        // $pivotData =  DB::table('book_customer')->where('book_id', $book->id)->where('customer_id', $customer->id)->update(['hasPermission' => 1]);
     
        $notification = auth()->user()->notifications->find($request->nid);
        if($notification)
        {
          $notification->markAsRead();
        }
        return view('admin.viewRequest');
      }
      

    }

}
