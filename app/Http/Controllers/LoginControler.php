<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginControler extends Controller
{
    public function login()
    {
    
            if(User::id == "1"){
                return view('homemanager'); 
            }else if(User::id == "2"){
                return view('homesup');
            }else if(User::id == "3"){
                return view('home');
            }
        
    }
}
