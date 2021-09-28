<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function login(Request $req)
    {
        $req->validate([
            'username'=>'require',
            'userpassword'=>'require'
        ]);
        return view ("login");
       
    }
    public function registration(Request $req)
    {
        $req->validate([
            'userfirstname'=>'require',
            'username'=>'require',
            'useremail'=>'require',
            'userpassword'=>'require',
            'reuserpassword'=>'require'

        ]);
        return view("registration");
    }
}
