<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Webpatser\Uuid\Uuid;
use App\Book;
use App\User;
use Auth;

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
    $categories = Category::all();
    return view ("admin.category", compact('categories'));
  }
  public function books()
  {
    $books = Book::all();
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

}
