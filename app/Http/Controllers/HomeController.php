<?php

namespace Third_Wave_Coffee\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // this function returns a logged-in user back to the dashboard once they click the home button
    public function index()
    {
        return view('home');
    }

    public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
    }

}
