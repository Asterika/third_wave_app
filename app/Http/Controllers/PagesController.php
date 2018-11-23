<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //create a method to hold the home page
    public function home()
    {
      return view ('Welcome to the Third Wave Coffee Hub');
    }

    public function about()
    {
      return view ('about');
    }

    public function lingo()
    {
      return view ('lingo');
    }

    public function brew()
    {
      return view ('brew');
    }

    public function locate()
    {
      return view ('locate');
    }

    public function shops()
    {
      return view ('shops');
    }


}
