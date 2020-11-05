<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    return view ("admin.category");
  }
  public function books()
  {
    return view ("admin.books");
  }
  public function slider()
  {
    return view ("admin.slider");
  }
  public function user()
  {
    return view ("admin.user");
  }

}
