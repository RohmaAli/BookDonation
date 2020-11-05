<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
      return view ("index");
    }

    public function contact()
    {
      // return 123;
      return view("contact");
    }
    public function aboutus()
    {
      return view ("aboutus");
    }
    public function gallery()
    {
      return view ("gallery");
    }
    public function categories()
    {
      return view ("categories");
    }
    public function stories()
    {
      return view ('stories');
    }

}
