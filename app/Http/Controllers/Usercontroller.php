<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    //
    function login(Request $req){
        return $req->input();
    }
}
