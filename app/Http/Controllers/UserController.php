<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function index(){
      return User::all();
    }

    public function store(Request $request){

       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->save();

   }
}
