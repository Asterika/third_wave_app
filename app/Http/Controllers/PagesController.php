<?php

namespace Third_Wave_Coffee\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //create a method to hold the each page
    //specify what view that page should contain
    public function home()
    {
      return view ('welcome');
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

    // public function shops()
    // {
    //   return view ('shops');
    // }


}
