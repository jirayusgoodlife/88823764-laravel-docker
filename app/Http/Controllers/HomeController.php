<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check())
        {
            if (Auth::user()->emp_dep_id == 1)
            {
                return view('managerhome');
            }

            else if (Auth::user()->emp_dep_id == 2)
            {
                return view('managerhome');
            }

            else if (Auth::user()->emp_dep_id == 3)
            {
                return view('managerhome');
            }
        }
    }
}
