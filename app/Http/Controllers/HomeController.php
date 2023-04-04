<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('User');
    }

    public function index()
    {
        if (User::check())
        {
            if (User::user()->emp_dep_id == 1)
            {
                return view('managerhome');
            }

            else if (User::user()->emp_dep_id == 2)
            {
                return view('managerhome');
            }

            else if (User::user()->emp_dep_id == 3)
            {
                return view('managerhome');
            }
        }
    }
}
