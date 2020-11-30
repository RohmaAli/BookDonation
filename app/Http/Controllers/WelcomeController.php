<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

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

    public function storeContact(Request $request)
    {
      // return $request;
      $contact = new Contact();
      $contact->firstName = $request->fname;
      $contact->lastName = $request->lname;
      $contact->message = $request->message;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->save();
      return redirect()->back();
     }

}
